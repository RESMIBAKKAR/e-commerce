<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravel\Passport\HasApiTokens;

class AuthApiController extends Controller
{
    use HasApiTokens; // تضمين ميزة التوكنات

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
      
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return response()->json(['email' => $user], 200);

            $token = $user->createToken('MyApp')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }
}
