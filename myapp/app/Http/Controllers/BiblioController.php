<?php

namespace App\Http\Controllers;

use App\Models\auteurs;
use App\Models\Livres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BiblioController extends Controller
{
    public function index(){
      $data = Livres::with('auteurs')->get();
      return view('Emprunt.index',[
        'data' => $data
      ]);
    }
    public function delete($id){
        $livre=Livres::find($id);
        $livre->delete();
        return to_route('Emprunt.index')->with('yes','Suppression with suces');
    }
    public function ajouter(){
        return view('Emprunt.add');
    }
    public function store(Request $request){
        $form = $request->validate([
            'titre' => 'required',
            'anneepub'=>'required',
        ]);
    }
}
