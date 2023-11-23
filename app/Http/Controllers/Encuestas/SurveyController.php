<?php

namespace App\Http\Controllers\Encuestas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Survey;

class SurveyController extends Controller
{
    public function index() {

        $lista = Survey::all();

        return view('encuestas.index', [
            'lista' => $lista,

        ]);
    }

    public function newPerson() {

       
        return view('encuestas.newperson');
    }

    public function store(Request $request)
    {
       // dd($request);
    }


}
