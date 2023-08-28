<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'description',
    'start_date',
    'end_date',
    'contact_id',
    'company',
    'user_id',
    'status'
  ];

  protected $casts = [
    'start_date' => 'date:Y-m-d',
    'end_date' => 'date:j F, Y',
    'deadline' => 'date',
  ];

  public function contact(): BelongsTo
  {
    return $this->belongsTo(Contact::class);
  }

  public function author(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }

  public function boards(): HasMany
  {
    return $this->hasMany(Board::class);
  }

  public function team() // users working on this project
  {
    return $this->belongsToMany(User::class, 'project_user')
      ->withPivot('role', 'assigned_by')
      ->withTimestamps();
  }

  public function tasks(): HasMany
  {
    return $this->hasMany(Task::class);
  }

  public function files()
  {
    return $this->hasMany(\App\Models\File::class);
  }

  public function scopeForUser(Builder $query, User $user)
  {
    if ($user->hasPermissionTo('view-all-projects') || $user->hasAnyRole(['admin', 'general-manager'])) {

      return $query->with(['contact:id,company_id' => ['company:id,name'], 'files'])
        ->orderByDeadline();
    }

    /*return $query->withBudget()
      ->where(function ($query) use ($user) {
        $query->where('id', $user->id)
          ->orWhereHas('users', function ($query) use ($user) {
            $query->where('user_id', $user->id);
          });
      })
      ->with(['contact:id,company_id' => ['company:id,name']])
      ->orderByDeadline();*/

    /*if ($user->hasPermissionTo('view-all-projects')) {
      return $query->withBudget($user)
        ->with(['contacts:id,first_name' => ['companies:id,name'], 'files'])
        ->orderByDeadline();
    }

    return $query->withBudget()
      ->where(function ($query) use ($user) {
        $query->where('id', $user->id)
          ->orWhereHas('users', function ($query) use ($user) {
            $query->where('user_id', $user->id);
          });
      })
      ->with(['contacts:id,first_name' => ['companies:id,name']])
      ->orderByDeadline();*/

    $query->select(['id', 'contact_id', 'description', 'name', 'status'])
      ->whereHas('users', function ($query) use ($user) {
        $query->where('user_id', $user->id);
      })
      ->with(['contact:id,company_id,first_name,last_name', 'contact.company:id,name'])
      ->orderByDeadline();
  }

  public function scopeUsersNotOnProject()
  {
    $existingUserIds = $this->users->pluck('id')->toArray();

    /*$users = \DB::table('users')
      ->whereNotIn('id', function ($query) {
        $query->select('user_id')
          ->from('project_user')
          ->where('project_id', $this->id);
      })
      ->whereDoesntHave('roles', function ($query) {
        $query->whereIn('slug', ['admin', 'manager']);
      })
      ->get();*/

    $users = \DB::table('users')
      ->whereNotIn('id', function ($query) {
        $query->select('user_id')
          ->from('project_user')
          ->where('project_id', $this->id);
      })
      ->get();

    return $users;
  }

  public function scopeWithBudget($query)
  {
    return $query->select('projects.*')
      ->selectSub(function ($subquery) {
        $subquery->from('tasks')
          ->whereColumn('tasks.project_id', 'projects.id')
          ->selectRaw('SUM(tasks.cost)');
      }, 'budget');
  }

  /*public function scopeWithEndDates($query)
  {
    return $query->select('id', 'name', \DB::raw("
      CASE
        WHEN end_date < NOW() THEN 'ended'
        WHEN end_date < DATE_ADD(NOW(), INTERVAL 1 WEEK) THEN 'ending recently'
        WHEN end_date < DATE_ADD(NOW(), INTERVAL 2 WEEK) THEN 'ending next week'
        ELSE 'still time'
      END AS end_date_group
    "));
  }*/

  public function scopeOrderByDeadline(Builder $query)
  {
    // return $query->orderBy('projects.created_at');
    // return $query->leftJoin('tasks', 'tasks.project_id', '=', 'projects.id')
    //   ->select('projects.*', \DB::raw('MAX(tasks.end_date) as deadline'))
    //   ->orderBy('deadline')
    //   ->orderBy('projects.created_at')
    //   ->groupBy('projects.id');

    // return $query->leftJoin('tasks', 'tasks.project_id', '=', 'projects.id')
    //   ->select('projects.*', \DB::raw('COALESCE(DATE_FORMAT(MAX(tasks.end_date), "%Y-%m-%d"), projects.created_at) as deadline'))
    //   ->orderBy('deadline')
    //   ->orderBy('projects.created_at')
    //   ->groupBy('projects.id');

    return \DB::table('projects')
      ->leftJoin('tasks', 'tasks.project_id', '=', 'projects.id')
      ->select('projects.*', \DB::raw('COALESCE(CAST(MAX(tasks.end_date) AS DATETIME), projects.created_at) as deadline'))
      ->groupBy('projects.id')
      ->orderBy('deadline')
      ->orderBy('projects.created_at');
  }

  public function getProgressAttribute()
  {
    $totalTasks = $this->tasks()->count();

    if ($totalTasks == 0) {
      return 0;
    }

    $doneTasks = $this->tasks()->where('status', 'done')->count();

    return round($doneTasks / $totalTasks * 100);
  }

  public function deadline(): Attribute
  {
    return Attribute::make(
      get: fn (mixed $value, array $attributes) => (new Carbon($attributes['end_date']))->format('d M, Y'),
      // set: fn ($budget) => $budget * 100,
    );
  }

  protected function budget(): Attribute
  {
    return Attribute::make(
      get: fn ($budget) => 'Mk ' . number_format($this->tasks()->sum('cost') / 100, 2),
      set: fn ($budget) => $budget * 100,
    );
  }

  public function getCommissionAttribute()
  {
    /*return optional($this->owner->first()->roles->first())->slug == 'sales-member'
      ? 'Mk ' . number_format($this->tasks()->sum('cost') * (10 / 100) / 100, 2)
      : 0;*/

    $owner = $this->owner->first();

    if ($owner && $owner->hasRole('sales-member')) {
      return 'Mk ' . number_format($this->tasks()->sum('cost') * (10 / 100) / 100, 2);
    }

    return 0;
  }

  public function getAssignableUsersAttribute()
  {
    $loggedInUserId = auth()->id();
    $excludedRoles = ['admin', 'general-manager'];

    $users = \DB::table('users')
      ->select(['users.id', 'users.name'])
      ->leftJoin('role_user', 'users.id', '=', 'role_user.user_id')
      ->leftJoin('roles', 'role_user.role_id', '=', 'roles.id')
      ->where('users.id', '<>', $loggedInUserId)
      ->whereNotIn('roles.slug', $excludedRoles)
      ->orderBy('users.name')
      ->groupBy('users.id')
      ->get();

    return $users;
  }

  public function statusColor(): Attribute
  {
    return Attribute::make(
      get: fn ($value) => ['completed' => 'bg-green-100 text-green-800', 'cancelled' => 'bg-rose-100 text-rose-800'][$this->status] ?? 'bg-blue-100 text-blue-800'
    );
  }

  public function deadlineColor(): Attribute
  {
    return Attribute::make(
      get: fn ($value) => ['completed' => 'bg-green-500', 'cancelled' => 'bg-rose-500'][$this->status] ?? 'bg-blue-500'
    );
  }

  public function scopeTransferOwnershipTo($newOwnerId)
  {
    $currentOwner = $this->owner->first();

    // Check if the current owner has any tasks on the project
    $hasTasks = $this->tasks()->where('user_id', $currentOwner->id)->exists();

    // If the current owner doesn't have tasks, remove them from the project_user table
    if (!$hasTasks && $currentOwner) {
      $this->users()->detach($currentOwner);
    }

    // Update the new owner's role to 'owner'
    $this->users()->syncWithoutDetaching([
      $newOwnerId => ['role' => 'owner'],
    ]);
  }

  public function cancelled(): Attribute
  {
    return Attribute::make(
      get: fn ($value) => $this->status === 'cancelled'
    );
  }
}
