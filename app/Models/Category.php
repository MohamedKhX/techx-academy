<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    /*
     * Get the courses that belong to this category
     * */
    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
