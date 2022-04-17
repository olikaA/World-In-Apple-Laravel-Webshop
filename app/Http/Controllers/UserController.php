<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
  function login(Request $request)
  {

    $request->validate([
      
      'email' => 'required',
      'password' => 'required'

    ]);

    $user = User::where(['email'=>$request->email])->first();

    if (!$user || !Hash::check($request->password,$user->password))
    {
      $error_message = "Email and password are not matching.";
      return view('login', compact('error_message'));
    }
    else {
      $request->session()->put('user', $user);
      return Redirect('/');

    }
  }
}
