<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
  use HasFactory;

  public function users()
  {
    return $this->belongsToMany(User::class);
  }

  public function permissions(): BelongsToMany
  {
    return $this->belongsToMany(Permission::class)->withTimestamps();
  }

  public function syncPermissions($permissions)
  {
    $this->permissions()->sync($permissions);
  }
}