<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CommentsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Hello World";
});

Route::get('/user/{id}/{name?}', function ($id, $name = "Artun") {
    return 'Your id is ' . $id . ' and your name is '  . $name;
})->where('id', '[0-9]+');

Route::get('/news', [NewsController::class, 'hello']);
Route::get('/comments', [CommentsController::class, 'index']);

// to render an html template with the router , view, controller
Route::get('/home', [NewsController::class, 'home']);

// to render an html template
Route::view('/details', 'details');
