<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  public function course_section(){
    return $this->belongsTo(CourseSection::class,'course_section_id','id');
  }

  // many to many
  public function teachers(){
    return $this->belongsToMany(Teacher::class,'teacher_course','course_id','teacher_id');
  }

  
}

