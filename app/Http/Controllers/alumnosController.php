<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Carrera;
use DB;

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

    	return Redirect('/consultarAlumnos');
    }

    public function consultarAlumnos() {
        $alumnos=DB::table('alumnos')
            ->join('carreras', 'alumnos.id_carrera', '=', 'carreras.id')
            ->select('alumnos.*', 'carreras.nombre AS carrera')
            ->paginate(5);

        return view('consultarAlumnos', compact('alumnos'));
    }

    public function eliminarAlumno($id) {
        $alumno=Alumno::find($id);
        $alumno->delete();

        return Redirect('/consultarAlumnos');
    }

    public function editarAlumno($id){
        $alumno=Alumno::find($id);
        return view('editarAlumno', compact('alumno'));
    }

    public function actualizarAlumno(Request $datos, $id){
        $alumno=Alumno::find($id);
        $alumno->nombre=$datos->input('nombre');
        $alumno->edad=$datos->input('edad');
        $alumno->sexo=$datos->input('sexo');
        $alumno->carrera=$datos->input('carrera');
        $alumno->correo=$datos->input('correo');
        $alumno->save();

        return Redirect('/consultarAlumnos');
    }

    public function alumnosPDF(){
        $alumnos=Alumno::all();
        $vista=view('alumnosPDF', compact('alumnos'));
        $dompdf=\App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream('reporte.pdf');
    }

        public function carreraAlumnosPDF($id){
        $alumnos=DB::table('alumnos')
            ->where('id_carrera', '=', $id)
            ->get();
        $carrera=Carrera::find($id);
        $vista=view('carreraAlumnosPDF', compact('alumnos', 'carrera'));
        $dompdf=\App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream('lista.pdf');
    }
}










