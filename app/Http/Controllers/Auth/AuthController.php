<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

  public function login(){
    $credentials = request(['email', 'password']);
    $token = auth()->attempt($credentials);

    if (!$token) {
        return response()->json(['error' => 'Unauthorized'], 401);
    }
    return response()->json([
      "access-tokem"=>$token
    ]);
  }


  public function logout(){
      auth()->logout();
      return response()->json(["message"=>"saliste exitosamenete"]);
  }

  
      
}
