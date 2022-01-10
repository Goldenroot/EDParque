<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list_works(){

       return view('work.list');
    }

    public function work_create(Request $request){

        Work::Create([
            'user_id' => $request->user_id,
            'name' => $request->NomeTrabalho,
            'class' => $request->NomeDisciplina,
            'description' => $request->DescricaoTrabalho,
            'file' => $request->file,
            'delivery_at' => $request->EntregaTrabalho,
        ]);

        return $request;
    }
}
