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


    public function agregarPersona(Request $request){
        $p = new PersonaModel;

        $p -> nombre = $request->input('nombre');
        $p -> apellido = $request->input('apellido');
        $p -> mail = $request->input('mail');
        $p -> save();

        $creado = true;
        return view('alta', ['creado' => $creado]);

    }

    public function hola($nombre,$apellido,$correo){
        $p = new PersonaModel;

        $p -> nombre = $nombre;
        $p -> apellido = $apellido;
        $p -> mail = $correo;

        $p -> save();


        return view('inicio', ['user' => $nombre]);

    }


}
