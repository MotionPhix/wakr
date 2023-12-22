<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Company extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'address',
  ];

  protected $casts = [
    'created_at' => 'date:d m, Y',
  ];

  public function contacts()
  {
    return $this->hasMany(Contact::class);
  }

  public function phones(): HasManyThrough
  {
    return $this->hasManyThrough(Phone::class, Contact::class);
  }

  public function scopeOrderByName(Builder $query)
  {
    return $query->orderBy('name');
  }
}
