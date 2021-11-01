<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/newsfeed', [HomeController::class, 'newsfeed'])->name('newsfeed');

//My Profile

Route::get("/profile", [ProfileController::class, "own_profile"])->name("view_own_profile");

Route::get("/settings", [ProfileController::class, "settings"])->name("settings");

//People

Route::get("/estudantes", [HomeController::class, "view_students"])->name("view_students");

Route::get('/check_relationship_status/{id}', function ($id){
    User::find($id);

});

