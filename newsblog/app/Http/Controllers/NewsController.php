<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //
    public function hello()
    {
        return "Hello World!";
    }

    public function home()
    {
        $first_name = 'Haykay';
        $last_name = 'Qazi';
        return view('home', compact('first_name', 'last_name'));
    }
}
