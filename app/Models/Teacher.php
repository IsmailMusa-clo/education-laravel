<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
 
    public function courses(){
      return $this->belongsToMany(Course::class,'teacher_course','teacher_id','course_id');
    }
}
