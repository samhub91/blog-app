<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'category_id'];

    // Auto-generate slug on saving
    public static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->slug = Str::slug($post->title);
        });

        static::updating(function ($post) {
            $post->slug = Str::slug($post->title);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
