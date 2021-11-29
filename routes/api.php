<?php

use App\Http\Controllers\FriendshipController;
use App\Http\Controllers\ProfileController;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/weather', function (){
    $Country = request('Country');
    $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=$Country&appid=f649a470b71845e697f5fc8b83195f25&units=metric");

    return $response->json();
});

Route::get('cl_user/{id}', function (Request $request) {
    $user = User::where('id', $request->id)->with('profile')->get();

    return $user;
});
