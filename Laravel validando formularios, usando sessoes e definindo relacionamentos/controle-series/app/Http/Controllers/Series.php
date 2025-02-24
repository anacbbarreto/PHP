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

        return redirect()->route('series.index');
    }

    public function destroy (Request $request) {
       
        Serie::destroy($request->series);
        return redirect()->route('series.index');
    }
}