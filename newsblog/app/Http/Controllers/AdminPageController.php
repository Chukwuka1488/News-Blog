<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPageController extends Controller
{
    // post create
    public function postsCreate()
    {
        return view('admin.posts.create');
    }

    // post index
    public function postsIndex()
    {
        return view('admin.posts.index');
    }

    // topics create
    public function topicsCreate()
    {
        return view('admin.topics.create');
    }

    // topics index
    public function topicsIndex()
    {
        return view('admin.topics.index');
    }
    // users create
    public function usersCreate()
    {
        return view('admin.users.create');
    }

    // users index
    public function usersIndex()
    {
        return view('admin.users.index');
    }
}
