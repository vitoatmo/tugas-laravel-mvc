<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function register(Request $request){
    // dd($request->all());
    // $namadepan = $request->input()];
    // $namabelakang = $request->input('last_name')];
    return view('register');
  }
  public function welcome(Request $request){
    // dd($request->all());
    // $nama = $request["nama"];
    return view('welcome');
  }
}
