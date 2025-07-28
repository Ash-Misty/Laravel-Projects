<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Helpers\JwtDecoder;

class ProfileController extends Controller
{
    public function show()
    {
        $token = request()->cookie('jwt_token');

        if (!$token) {
            return redirect('/login');
        }

        $jwtDecoder = new JwtDecoder(); 
        $user = $jwtDecoder->getUserFromToken($token);

        if (!$user) {
            return redirect('/login')->withErrors(['Invalid or expired token']);
        }

        return view('profile', compact('user'));
    }
}
