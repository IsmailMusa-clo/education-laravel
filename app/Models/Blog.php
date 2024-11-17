<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $fillable=['name','description','img','blog_section_id'];
    public function BlogSection(){
      return $this->belongsTo(BlogSection::class);
    }
}
