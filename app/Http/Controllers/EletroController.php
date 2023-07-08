<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eletro;

class EletroController extends Controller
{
    //
    public function index(){

        $eletros = Eletro::all();

        return view('index',['eletros' => $eletros]);
    }
    public function create(){
        return view('app.create');
    }
    public function store(Request $request){
        $eletro = new Eletro;

        $eletro->name = $request->name;
        $eletro->description = $request->description;
        $eletro->tensaov = $request->tensaov;
        $eletro->marca = $request->marca;

        $eletro->save();

        return redirect ('/api');
    }
}
