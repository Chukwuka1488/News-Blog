<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailsPageController extends Controller
{
    //
    public function index($id)
    {
        return view('front.details', ['id' => $id]);
    }
}
