<?php

namespace App\Http\Controllers;
use App\Helpers\JwtDecoder;

class MarksController extends Controller
{
    public function show()
    {
        $token = request()->cookie('jwt_token');

        // Create an instance of JwtDecoder
        $decoder = new JwtDecoder();


        $user = $decoder->getUserFromToken($token);


        if (!$user) {
            return redirect('/login')->withErrors(['Invalid or expired token']);
        }


        $marks = $user->marks;


        return view('marks', compact('user', 'marks'));
    }
}
