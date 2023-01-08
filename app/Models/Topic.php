<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Topic extends Model
{
    use HasFactory;

    /**
     * Bootstrap the model and its traits.
     *
     * @return void
     */
    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($topic) {
            $topic->slug = \Str::slug($topic->name);
        });
    }

    /*
     * Get categories that related to this topic
     * */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
