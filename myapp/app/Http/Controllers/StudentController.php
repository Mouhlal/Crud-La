<?php

namespace App\Http\Controllers;

use App\Models\Fil;
use App\Models\Filiere;
use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function index(){
        $student =Student::all();
        $filiere = Fil::all();
        return view('Stagiares.index',compact('student','filiere'));
    }

    public function create(){
        $fil = Fil::get();
        return view('Stagiares.create',compact('fil'));
    }

    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect()->route('index');
    }

    public function edit($id){
        return view('Stagiares.edit');
    }


}


