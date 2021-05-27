<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eps as Eps;


class EpsController extends Controller
{
  //Funcion para guardar un registro
        public function store(Request $request)
        {
            $eps = new Eps;
            $eps->nombre = $request->nombre;
            $eps->save(); 
            // $eps->create($request->all());
            return redirect('eps/');
        
        }

        public function create()
        {
            return \View::make('eps/new');
        }

        public function index(){
            $epses = Eps::all(); 
            return \View::make('eps/list',compact('epses'));
        }

        public function edit($id)
        {
            $eps = Eps::find($id);
            return \View::make('eps/update',compact('eps'));
        }

        public function update(Request $request)
        {
                    $eps = Eps::find($request->id);
                    $eps->nombre = $request->nombre;
                    $eps->save();
                    return redirect('eps');
        }
        public function search(Request $request){
            $epses = Eps::where('nombre','like','%'.$request->nombre.'%')->get();
            return \View::make('eps/list', compact('epses'));   
        }
}
