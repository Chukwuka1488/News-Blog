<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogPost;
// use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    //
    public function blogPost()
    {

        $blog = blogPost::all();
        // $blog = DB::table('blogs')->get();
        // $blog = DB::select('select * from blogs');
        return view('front.home', compact('blog'));
    }

    public function home()
    {
        $first_name = 'Haykay';
        $last_name = 'Qazi';
        return view('front.layout.master', compact('first_name', 'last_name'));
    }
}
