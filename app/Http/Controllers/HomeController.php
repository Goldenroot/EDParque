<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function newsfeed(){
        return view("newsfeed");
    }

    public function view_students(){
        $students = User::All();

        return view('people.list', ["students" => $students]);
    }

    public function view_person_profile($slug){
        $person = User::where("slug", $slug)->first();


        if($person == Auth::user()){
            return redirect("/profile");
        }elseif($person == null){
            return view("people.error", ["slug" => $slug]);
        }else{
            return view("people.profile", ["person" => $person]);
        }

    }

}
