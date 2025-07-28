<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class LoginController extends Controller
{
    // Show the login form
    public function show()
    {
        return view('login');
    }

    // Handle user login
    public function authenticate(Request $request)
    {
        // Validate the input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Find the user
        $user = User::where('email', $request->email)->first();

        // Check user and password
        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['Invalid credentials']);
        }

        // Create the JWT payload
        $payload = [
            'iss' => 'jwt-auth',
            'sub' => $user->id,
            'email' => $user->email,
            'name' => $user->name,
            'iat' => time(),
            'exp' => time() + 60 * 60 // 1 hour expiration
        ];

       
     

        // Encode the token
        $jwt = JWT::encode($payload, env('JWT_SECRET'), 'HS256');

        // Redirect with cookie
        return redirect('/home')->cookie(
            'jwt_token', $jwt, 60, 
            null, null,          
            false, true                
        );
    }

    // Handle logout
    public function logout()
    {
        return redirect('/login')->withoutCookie('jwt_token');
    }
}
