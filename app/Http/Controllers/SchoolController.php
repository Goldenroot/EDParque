<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SchoolController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list_schools(){

        $schools = School::get();

        return view('schools.list', ['schools' => $schools]);
    }

    public function view_school(Request $request){

        $school = School::where('id', $request->id)->first();

        $photos = $school->photos;

        $students = User::where('school_id', $request->id)->get();

        return view('schools.page', ['school' => $school, 'students' => $students, 'photos' => $photos]);

    }

    public function add_school(Request $request){

        $user = Auth::User();
        $user->school_id = $request->id;

        $user->save();
    }

    public function get_school(Request $request){
        $school = School::where('id', $request->id)->first();

        return $school;
    }
}
