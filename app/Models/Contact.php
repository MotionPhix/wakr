<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Contact extends Model
{
  use HasFactory;

  protected $fillable = [
    'first_name',
    'last_name',
    'email',
    'company_id',
    'user_id',
    'status'
  ];

  protected $casts = [
    'created_at' => 'date:d m, Y',
  ];

  public function company(): BelongsTo
  {
    return $this->belongsTo(Company::class);
  }

  public function interactions(): HasMany
  {
    return $this->hasMany(Interaction::class);
  }

  public function lastInteraction(): HasOne
  {
    return $this->hasOne(Interaction::class, 'id', 'last_interaction_id');
  }

  protected function fullName(): Attribute
  {
    return Attribute::make(
      get: fn ($value) => $this->first_name . ' ' . $this->last_name
    );
  }

  public function archived(): Attribute
  {
    return Attribute::make(
      get: fn ($value) => $this->status === 'dormant'
    );
  }

  public function statusColor(): Attribute
  {
    return Attribute::make(
      get: fn ($value) => ['active' => 'bg-green-100 text-green-800', 'dormant' => 'bg-rose-100 text-rose-800'][$this->status] ?? 'bg-blue-100 text-blue-800'
    );
  }

  public function scopeWithLastInteraction(Builder $query)
  {
    $query->addSubSelect(
      'last_interaction_id',
      Interaction::select('id')
        ->whereRaw('contact_id = contacts.id')
        ->latest()
    )->with('lastInteraction');
  }

  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }

  public function projects(): HasMany
  {
    return $this->hasMany(Project::class);
  }

  public function phones(): MorphMany
  {
    return $this->morphMany(Phone::class, 'phoneable');
  }

  public function total()
  {
    return $this->forUser(auth()->user())->count();
  }

  public function scopeOrderByName(Builder $query)
  {
    $query->orderBy('first_name')->orderBy('last_name');
  }

  public function scopeForUser(Builder $query, User $user)
  {
    if ($user->hasAnyRole(['admin', 'general-manager'])) {
      return $query->with('company');
    }

    $query->whereHas('users', function ($query) use ($user) {
      $query->where('user_id', $user->id);
    })->with(['company' => function ($query) {
      $query->select('companies.id', 'companies.name');
    }])->select(['id', 'first_name', 'last_name', 'status', 'email', 'company_id']);
  }

}
