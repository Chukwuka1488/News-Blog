<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\DetailsPageController;
use App\Http\Controllers\AdminPageController;
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

// to render the home route html template with the router , view, controller
// Route::get('/', [HomePageController::class, 'index']);
Route::get('/', [NewsController::class, 'blogPost']);

// to render the details route html template with the router , view, controller
Route::get('/details', [DetailsPageController::class, 'index']);

// to render the admin route html template with the router , view, controller
Route::get('/admin/posts/create', [AdminPageController::class, 'postsCreate']);
Route::get('/admin/posts/index', [AdminPageController::class, 'postsIndex']);
Route::get('/admin/topics/create', [AdminPageController::class, 'topicsCreate']);
Route::get('/admin/topics/index', [AdminPageController::class, 'topicsIndex']);
Route::get('/admin/users/create', [AdminPageController::class, 'usersCreate']);
Route::get('/admin/users/index', [AdminPageController::class, 'usersIndex']);






Route::get('/user/{id}/{name?}', function ($id, $name = "Artun") {
    return 'Your id is ' . $id . ' and your name is '  . $name;
})->where('id', '[0-9]+');


Route::get('/test', [NewsController::class, 'home']);
Route::get('/comments', [CommentsController::class, 'index']);

// to render an html template with the router , view, controller
// Route::get('/home', [NewsController::class, 'home']);
