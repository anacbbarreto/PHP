<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Series extends Controller
{
    public function index(Request $request) {
        $series = Serie::query()->orderBy('nome')->get();      
        $mensagemSucesso = session('mensagem.sucesso');

        return view('series.index')->with('series', $series)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create() 
     {
        return view('series.create')->with('series');
 
    }

    public function store (Request $request){
      
    $serie = Serie::create($request->all());
    return redirect()->route('series.index')->with('mensagem.sucesso', "Serie '{$serie->nome}' adicionada com sucesso");
   
}

    public function destroy (Serie $series) {

        $series->delete();
        return redirect()->route('series.index')->with('mensagem.sucesso', "Serie '{$series->nome}' removida com sucesso");
    }


    public function edit (Serie $series) {

        return view('series.edit')->with('serie', $series);
    }

    public function update (Serie $series, Request $request) {

        $series->nome = $request->nome;
        $series->save();
        return redirect()->route('series.index')->with('mensagem.sucesso', "Serie '{$series->nome}' atualizada com sucesso");

    }
}