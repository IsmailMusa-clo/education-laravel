<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index(){

      $blogs=Blog::with('BlogSection')->get();
       return view('admin/blog/index',compact('blogs'));
    }

    public function create(){
      $sections=BlogSection::all();
    return view('admin/blog/add',compact('sections'));
    }

    public function add(Request $request){

        $request->validate([
      'name'=>'required|max:255',
        'img'=>'file',
      'blog_section_id'=>'required',
      ]);


      $path = $request->file('img')->store('blogs');
      Blog::create([
        'name'=>$request->name,
        'description'=>$request->description,
        'img'=>$path,
        'blog_section_id'=>$request->blog_section_id,
      ]);
      return redirect()->route('admin.blog');
    }
    public function edit($id){
      $blog=Blog::find($id);
      $sections=BlogSection::all();
      return view('admin/blog/edit',compact('blog','sections'));
    }
    public function update(Request $request){
      $blog=Blog::find($request->id);
      $blog->update($request->all());
      return redirect()->route('admin.blog');
      }


    public function delete($id){
      $blog=Blog::find($id)->delete();
      return redirect()->route('admin.blog');
    }
}
