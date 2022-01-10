<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\FriendshipController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\WorkController;
use App\Models\School;
use App\Models\User;
use App\Traits\Friendable;
use Illuminate\Support\Facades\Auth;
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

Route::get('/overview', [HomeController::class, 'overview'])->name('overview');


Route::get('/newsfeed', [HomeController::class, 'newsfeed'])->name('newsfeed');
Route::get('/newsfeed', [HomeController::class, 'newsfeed'])->name('newsfeed');

Route::get('/teste', function (){

    $users = User::with('school')->get();
    dd($users);
});


//Work

Route::get('/works', [WorkController::class, 'list_works'])->name('list_works');

Route::get('/work/create', [WorkController::class, 'work_create'])->name('work_create');

//Schools

Route::get('/schools', [SchoolController::class, 'list_schools'])->name('list_schools');

Route::get('/school/{id}', [SchoolController::class, 'view_school'])->name('view_school');

Route::get('/add_school/{id}', [SchoolController::class, 'add_school'])->name('add_schools');

Route::get('/get_school/{id}', [SchoolController::class, 'get_school'])->name('get_school');

//My Profile

Route::get("/profile", [ProfileController::class, "own_profile"])->name("view_own_profile");

Route::get("/settings", [ProfileController::class, "settings"])->name("settings");

//People

Route::get("profile/{slug}", [HomeController::class, "view_person_profile"])->name("view_person_profile");

Route::get("/estudantes", [HomeController::class, "view_students"])->name("view_students");

Route::get("/check/{id}", [FriendshipController::class, "check"])->name("check_friends");

Route::get("/add_friend/{id}", [FriendshipController::class, "add_friend"])->name("add_friend");

Route::get("/accept_friend/{id}", [FriendshipController::class, "accept_friend"])->name("accept_friend");

Route::get("/get_friends/{id}", function ($id){
    $user = User::where('id', $id)->first();

    return $user->friends();
});

// Messenger

Route::get("/messenger",  [ContactsController::class, "messenger"])->name("messenger");

Route::get("/contacts",  [ContactsController::class, "get"])->name("get_contacts");

Route::get("/conversation/{id}",  [ContactsController::class, "getMessagesFor"])->name("getMessagesFor");

Route::post("/conversation/send",  [ContactsController::class, "send"])->name("send_message");


