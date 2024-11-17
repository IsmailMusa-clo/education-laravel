<?php

namespace App\Http\Controllers;

use App\Models\BlogSection;
use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
  public function index(){

  
    return view('welcome');
    
  }
}
