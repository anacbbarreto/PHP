<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Series extends Controller
{
    public function index() {
        $series = Serie::query()->orderBy('nome')->get();      

       return view('series.index')->with('series', $series);
    }

    public function create() 
     {
        return view('series.create')->with('series');
 
    }

    public function store (Request $request){
      
    Serie::create($request->all());

        return redirect('/series');
    }

    public function destroy($id)
{
    $serie = Serie::find($id);

    if (!$serie) {
        return redirect('/series')->with('error', 'Série não encontrada.');
    }

    $serie->delete();

    return redirect('/series')->with('success', 'Série excluída com sucesso.');
}

public function update(Request $request, $id)
{
    $serie = Serie::find($id);

    if (!$serie) {
        return redirect('/series')->with('error', 'Série não encontrada.');
    }

    $serie->nome = $request->input('nome'); 
    $serie->save(); 

    return redirect('/series')->with('success', 'Série atualizada com sucesso.');
}
}