<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseSection extends Model
{
  
  public function courses(){
    return $this->hasMany(Course::class,'course_section_id','id');
  }
}
