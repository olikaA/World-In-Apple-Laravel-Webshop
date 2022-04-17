<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
  function register(Request $request)
  {
    $input = $request->all();

    $validator = Validator::make($request->all(), [
      'name' => 'required|min:5',
      'email' => 'required|unique:users,email',
      'password' => 'required|min:5'

  ]);

  if ($validator->fails())
{
  $error_message = "Email is already taken or the password is not strong enough.";
return view('register', compact('error_message'));
}
else {
  User::create([
      'name' => $request['name'],
      'email' => $request['email'],
      'password' => Hash::make($request['password']),
  ]);
  return view('login');
}



}
}
