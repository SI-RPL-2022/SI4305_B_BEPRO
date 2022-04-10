<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class CourseReview extends Model
{
    use HasFactory, HasRoles;
    protected $table = 'course_reviews';
    protected $primaryKey = 'id';
}
