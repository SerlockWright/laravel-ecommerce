<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Login Controller
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'handleLogin'])->name('login.submit');

Route::get('about', function () {
    // $about = 'This is about page';
    // $about2 = 'This is about page 2';
    //return view('about', compact('about', 'about2'));
    return view('about');
})->name('about');

Route::get('contact', function () {
    return "<h1>Contact Page</h1>";
});

Route::get('users/{id}', function ($id) {
    return "This is user $id";
})->name('edit-user');

Route::get('home', [HomeController::class, 'home']);

Route::get('homes', function () {
    return "<a href='".route('edit-user','tin')."'>About</a>";
});

Route::group(['prefix' => 'customer'], function () {
    Route::get('/', function(){
        return "<h1>Customer List</h1>";
    });
    Route::get('/create' , function(){
        return "<h1>Create Customer</h1>";
    });
    Route::get('/show' , function(){
        return "<h1>Show Customers</h1>";
    });
});

Route::fallback(function(){
    return "<h1>Route not exists</h1>";
});
