<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

  public function index()
  {
    return view('landing-page');
  }

  public function login(){
    return view('login-page');
  }
  public function login2(Request $request){

   dd($request);
}

  public function register(){
    return view('register-page');
  }

  public function indexregister(){
    return view('register-page');
  }
}
