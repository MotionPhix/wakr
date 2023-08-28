<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'bio',
    'address_id',
  ];

  protected $casts = [
    'created_at' => 'date:d m, Y',
  ];

  public function address()
  {
    return $this->belongsTo(Address::class);
  }

  public function contacts()
  {
    return $this->hasMany(Contact::class);
  }

  public function projects()
  {
    return $this->hasManyThrough(Project::class, Contact::class);
  }

  public function phones()
  {
    return $this->morphMany(Phone::class, 'phoneable');
  }

  public function scopeOrderByName(Builder $query)
  {
    return $query->orderBy('name');
  }
}
