<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function subCategories() {
        return $this->hasMany(SubCategory::class);
    }

    public function courses() {
        return $this->hasMany(Course::class);
    }

//    public function orderByName(Builder $query) :builder {
//        return $query->orderBy('name', 'ASC');
//    }

    public function user() {
        return $this->belongsTo(User::class, 'instructor_id', 'id');
    }

    public function countOfCourses() {
        return $this->courses()->count();
    }
}
