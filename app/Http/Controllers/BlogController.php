<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogSection;
use Illuminate\Http\Request;

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
      Blog::create($request->all());
      return redirect()->route('blog');
    }
    public function edit($id){
      $blog=Blog::find($id);
      $sections=BlogSection::all();
      return view('admin/blog/edit',compact('blog','sections'));
    }
    public function update(Request $request){
      $blog=Blog::find($request->id);
      $blog->update($request->all());
      return redirect()->route('blog');
      }


    public function delete($id){
      $blog=Blog::find($id)->delete();
      return redirect()->route('blog');
    }
}
