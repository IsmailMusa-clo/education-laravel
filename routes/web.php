<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogSectionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



// Route::get('/user',[UserController::class,'index']);
// Route::post('/user',[UserController::class,'store']);
// Route::put('/user/{id}',[UserController::class,'update']);
// Route::delete('/user/{id}',[UserController::class,'delete']);

  
Route::resource('user', UserController::class);

// blogsection route
Route::get('blogsection',[BlogSectionController::class,'index'])->name('BlogSection');
Route::get('blogsection/create',[BlogSectionController::class,'create']);
Route::post('blogsection/create',[BlogSectionController::class,'add'])->name('AddBlogSection');
Route::get('blogsection/edit/{id}',[BlogSectionController::class,'edit']);
Route::put('blogsection/edit',[BlogSectionController::class,'update'])->name('UpdateBlogSection');
Route::get('blogsection/delete/{id}',[BlogSectionController::class,'delete'])->name('deleteBlogSection');


// blog route
Route::get('blog',[BlogController::class,'index'])->name('blog');
Route::get('blog/create',[BlogController::class,'create']);
Route::post('blog/create',[BlogController::class,'add'])->name('Addblog');
Route::get('blog/edit/{id}',[BlogController::class,'edit']);
Route::put('blog/edit',[BlogController::class,'update'])->name('Updateblog');
Route::get('blog/delete/{id}',[BlogController::class,'delete'])->name('deleteblog');