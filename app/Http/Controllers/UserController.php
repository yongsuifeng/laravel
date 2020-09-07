<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){
	return "hello world!";
    }
   
    public function show(Request $request){
       return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
