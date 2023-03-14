<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function home()
    {
        return view ('home');
    }
}
