<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eletro;

class EletroController extends Controller
{
    //
    public function index(){

            $search = request('search');

            if($search){
                $eletros = Eletro::where([
                    ['name','like','%'.$search.'%']])->get();
            } else {
                $eletros = Eletro::all();
            }


        return view('index',['eletros' => $eletros , 'search'=> $search]);
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

        if($request->hasFile('image') ** $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("agora") ."." . $extension);

            $requestImage->move(public_path('img/eletros'), $imageName);

            $eletro->image = $imageName;

        }


        $eletro->save();

        return redirect ('/api');
    }

    public function show($id){
        $eletro = Eletro::findOrFail($id);

        return view('app.show',['eletro'=>$eletro]);

    }

    public function destroy($id){

        Eletro::findOrFail($id)->delete();

        return redirect('/api');

    }

    public function edit($id){

        $eletro =  Eletro::findOrFail($id);


        return view('app.edit' , ['eletro' => $eletro]);

    }

    public function update(Request $request){

        Eletro::findOrFail($request->id)->update($request->all());


        return redirect ('/');

    }




}
