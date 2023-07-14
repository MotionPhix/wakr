<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
  use HasFactory;

  protected $cascadeDeletes = [
    'comments',
    'images'
  ];

  protected $fillable = [
    'title',
    'slug',
    'content',
    'user_id'
  ];

  public function user(): BelongsTo
  {
    return $this->belongsTo(\App\Models\User::class);
  }

  public function comments(): HasMany
  {
    return $this->hasMany(\App\Models\Comment::class);
  }

  public function images(): MorphMany
  {
    return $this->morphMany(\App\Models\Image::class, 'imageable');
  }

  public function getFullPathAttribute()
  {
    return Storage::disk('posts')->url($this->path);
  }

  public static function boot()
  {
    parent::boot();

    self::deleting(function ($post) {
      $post->comments()->each(function ($comment) {
        $comment->delete();
      });
    });
  }
}
