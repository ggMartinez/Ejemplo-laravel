<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonaModel;


class PersonaController extends Controller
{

    public function listarTodasLasPersonas(){
        $personas = PersonaModel::all();
        return view('lista', ['personas' => $personas]);

    }
    
    public function listarUnaPersona($id){
        $personas = PersonaModel::where('id',$id)->get();
        return view('lista', ['personas' => $personas]);
    }


    public function listarPersonaParaModificar($id){
        $persona = PersonaModel::where('id',$id)->first();
        return view('modificacion', ['persona' => $persona]);
    }


    public function agregarPersona(Request $request){
        $p = new PersonaModel;

        $p -> nombre = $request->input('nombre');
        $p -> apellido = $request->input('apellido');
        $p -> mail = $request->input('mail');
        $p -> save();

        $creado = true;
        return view('alta', ['creado' => $creado]);

    }

    public function eliminarPersona(Request $request){
        $p = PersonaModel::find($request->input('id'));
        if($p){
            $p->delete();
            $eliminado = $request->input('id');
            return view('baja',['eliminado' => $eliminado]);
        }
        else {
            return view('baja',['error' => "No existe"]);
        }
    }

    public function modificarPersona(Request $request){
        $p = PersonaModel::find($request->input('id'));

        $p->nombre = $request->input('nombre');
        $p->apellido = $request->input('apellido');
        $p->mail = $request->input('mail');

        $modificado = $request->input('id');

        $p->save();

        return view('modificacion',['modificado' => $modificado]);


    }



}
