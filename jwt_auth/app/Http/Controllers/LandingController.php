<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function show()
    {
        return view('landing');
    }
}
