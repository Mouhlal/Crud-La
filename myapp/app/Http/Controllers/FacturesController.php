<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Factures;
use Illuminate\Http\Request;

class FacturesController extends Controller
{
    public function index()
    {
        $factures = Factures::with('client')->get();
        return view('Factures.Liste', compact('factures'));
    }

    public function ajouter()
    {
        $clients = Clients::all();
        return view('Factures.ajouter', compact('clients'));
    }

    public function store(Request $request)
    {
        Factures::create($request->all());
        return redirect()->route('index');
    }

    public function edit($id)
    {
        $factureFind = Factures::find($id);
        $clients = Clients::all();
        return view("Factures.edit", compact("factureFind", "clients"));
    }

    public function update(Request $request)
    {
        Factures::find($request->id)->update($request->all());
        return redirect()->route('index');
    }
 

    public function delete($id)
    {
        Factures::find($id)->delete();
        return redirect()->route('index');
    }
    public function search(Request $request)
{
    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');
    $factures = Factures::with('client')
        ->whereBetween('datefact', [$startDate, $endDate])
        ->get();

    return view('Factures.search', compact('factures'));
}
}
