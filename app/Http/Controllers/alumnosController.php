<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;

class alumnosController extends Controller
{
    public function registrarAlumnos(){
    	return view('registrarAlumno');
    }

    public function guardarAlumno(Request $datos){
    	$alumno= new Alumno();
    	$alumno->nombre=$datos->input('nombre');
    	$alumno->edad=$datos->input('edad');
    	$alumno->sexo=$datos->input('sexo');
    	$alumno->carrera=$datos->input('carrera');
    	$alumno->correo=$datos->input('correo');
    	$alumno->save();

    	return Redirect('/');
    }

    public function consultarAlumnos() {
        $alumnos=Alumno::all();
        return view('consultarAlumnos', compact('alumnos'));
    }
}










