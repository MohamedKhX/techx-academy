<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    /*
     * Get the user who made this enrollment.
     * */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /*
     * Get the course that belongs to this enrollment.
     * */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
