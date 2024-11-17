<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class BlogSection extends Model
{
  protected $table ="blog_sections";
  protected $fillable=['name','description'];


// one to many 
// section hasmany of blogs
public function blogs(){
  return $this->hasMany(Blog::class);
}

}
