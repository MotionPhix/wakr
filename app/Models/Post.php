<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
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
    'intro',
    'content',
    'user_id',
    'status'
  ];

  protected $casts = [
    'created_at' => 'date:d m, Y',
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

  public function archived(): bool
  {
    return $this->status === 'archived';
  }

  protected function author(): Attribute
  {
    return Attribute::make(
      get: fn ($value) => $this->user->first_name . ' ' . $this->user->last_name
    );
  }

  /**
   * Interact with the posts's creation date.
   */
  protected function publishedOn(): Attribute
  {
    return Attribute::make(
      get: fn (mixed $value, array $attributes) => (new Carbon($attributes['created_at']))->format('d M, y'),
      // set: fn (string $value) => strtolower($value),
    );
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
