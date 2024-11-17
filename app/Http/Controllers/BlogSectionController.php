<?php

namespace App\Http\Controllers;

use App\Models\BlogSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogSectionController extends Controller
{
  // crud get create update  delete 
  public function index(){
    $blog_sections = BlogSection::all();
    // dd($blog_sections);
    //  DB::table('blog_sections')->get();
    return view('admin/blogSection/blogSection',[
      'sections' =>$blog_sections
    ]);
  }  

  public function create(){

    return view('admin/blogSection/AddblogSection');
  }
  
  public function add(Request $request){
    
    // DB::table('blog_sections')->insert([
    //   'name'=>$request->name,
    //   'description'=>$request->description,
    // ]);
    
    $blog_section=new BlogSection();
    $blog_section->name=$request->name;
    $blog_section->description=$request->description;
    $blog_section->save();

    return redirect()->route('BlogSection');  
  }
  public function edit($id){

    // $blogSection=DB::table('blog_sections')->where('id',$id)->first();
    $blogSection=BlogSection::find($id);
    
    return view('admin/blogSection/EditblogSection',compact('blogSection'));
  }

  public function update(Request $request){
    // $blogSection=BlogSection::find($request->id);
    // $blogSection->name=$request->name;
    // $blogSection->description=$request->description;
    // $blogSection->update();

    BlogSection::where('id',$request->id)->update([
      'name'=>$request->name,
      'description'=>$request->description,
    ]);

    // DB::table('blog_sections')->where('id',$request->id)->update([
    //   'name'=>$request->name,
    //   'description'=>$request->description,
    // ]);

    return redirect()->route('BlogSection');  
  }

  public function delete($id){
    $blogSection=BlogSection::find($id);
    $blogSection->delete();
    // DB::table('blog_sections')->where('id',$id)->delete();
    return redirect()->route('BlogSection');  
  }
}
