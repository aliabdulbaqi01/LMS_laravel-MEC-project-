<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseGoal extends Model
{
    use HasFactory;
    protected $table = 'course_goals';
    protected $guarded = [];

    public function course() {
        return $this->belongsTo(Course::class);
    }
}
