<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $token = $request->cookie('jwt_token'); // Read JWT from cookie

        if (!$token) {
            return redirect('/login');
        }

        return view('home', compact('token'));
    }
}

