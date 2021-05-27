<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital as Hospital;

class HospitalController extends Controller
{
    //Funcion para guardar un registro
    public function store(Request $request)
    {
        $hospital = new Hospital;
        $hospital->nombre = $request->nombre;
        $hospital->nombre_representante = $request->nombre_representante;
        $hospital->nit = $request->nit;
        $hospital->direccion = $request->direccion;
        $hospital->telefono = $request->telefono;
        $hospital->save(); 
       // $hospital->create($request->all());
        return redirect('hospital/');
    
    }

    public function create()
    {
        return \View::make('hospital/new');
    }

    public function index(){
        $hospitales = Hospital::all(); 
        return \View::make('hospital/list',compact('hospitales'));
    }

    public function edit($id)
	{
		$hospital = Hospital::find($id);
        return \View::make('hospital/update',compact('hospital'));
	}

    public function update(Request $request)
	{
                $hospital = Hospital::find($request->id);
                $hospital->nombre = $request->nombre;
		        $hospital->save();
                return redirect('hospital');
	}
    public function search(Request $request){
        $hosptiales = Hospital::where('nombre','like','%'.$request->nombre.'%')->get();
        return \View::make('hospital/list', compact('hosptiales'));   
    }

}
