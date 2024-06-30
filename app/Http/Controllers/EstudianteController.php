<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function principal()
    {
        $estudiantes = Estudiante::withTrashed()->paginate(5);
        return view('estudiantes.principal', ['estudiantes' => $estudiantes]);
    }

    public function crear()
    {
        return view('estudiantes.crear');
    }

    public function mostrar($id)
    {
        $estudiante = Estudiante::find($id);
        return view("estudiantes.mostrar", compact('estudiante'));
    }

    public function store(Request $request)
    {
        $estudiante = new Estudiante();
        $estudiante->nombre = $request->nombre;
        $estudiante->grado = $request->grado; // Cambio de 'descripcion' a 'grado'
        $estudiante->paralelo = $request->paralelo; // Agregando campo 'paralelo'
        $estudiante->save();

        return redirect()->route('estudiantes.mostrar', $estudiante->id);
    }

    public function borrar($id)
    {
        $estudiante = Estudiante::withTrashed()->find($id);
        $estudiante->forceDelete();
        return redirect()->route('estudiantes.principal');
    }

    public function desactivarEstudiante($id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->delete();
        return redirect()->route('estudiantes.principal');
    }

    public function activarEstudiante($id)
    {
        $estudiante = Estudiante::withTrashed()->find($id);
        $estudiante->restore();
        return redirect()->route('estudiantes.principal');
    }

    public function editar(Estudiante $estudiante)
    {
        return view('estudiantes.editar', compact('estudiante'));
    }

    public function update(Request $request, Estudiante $estudiante)
    {
        $estudiante->nombre = $request->nombre;
        $estudiante->grado = $request->grado; // Cambio de 'descripcion' a 'grado'
        $estudiante->paralelo = $request->paralelo; // Agregando campo 'paralelo'
        $estudiante->save();

        return redirect()->route('estudiantes.mostrar', $estudiante->id);
    }
}
