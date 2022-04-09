<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blogs;
use App\Models\Comments;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     $blogs = blogs::all();

//     return view('welcome', ['blogs' => $blogs]);
//     // return view('welcome', ['message' => 'Hey this is shraddha']);
// });

Route::get('/', function () {
    // $blogs = blogs::all();

    // return view('welcome', ['blogs' => $blogs]);
    return view('welcome', ['message' => 'Welcome to Blog Application']);
});

// Route::get('/blog', [BlogsController::class, "index"]);

Route::resource('/user', UserController::class);

Route::resource('/home', HomeController::class);

Route::resource('/blog', BlogsController::class);

Route::resource('/comment', CommentsController::class);

// Route::get('/blog/{blog}/edit', [BlogsController::class, "edit"]);

// Route::get('/blog/{blog}', [BlogsController::class, "update"]);

// Route::get('/blog/store', [BlogsController::class, "store"]);

// Route::get('/blog/create', [BlogsController::class, "create"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
