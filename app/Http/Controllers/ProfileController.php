<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function own_profile(){
        return view("profile.public");
    }

    public function settings(){
        return view("profile.settings");
    }
}
