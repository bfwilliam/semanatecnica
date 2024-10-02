<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index() {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }
    
    public function create() {
        return view('usuarios.create');
    }
    
    public function store(Request $request) {
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->fecha_nacimiento = $request->fecha_nacimiento;
        $usuario->save();
    
        return redirect()->route('usuarios.index');
    }
    
    public function edit($id) {
        $usuario = Usuario::find($id);
        return view('usuarios.edit', compact('usuario'));
    }
    
    public function update(Request $request, $id) {
        $usuario = Usuario::find($id);
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->fecha_nacimiento = $request->fecha_nacimiento;
        $usuario->save();
    
        return redirect()->route('usuarios.index');
    }
    
    public function destroy($id) {
        $usuario = Usuario::find($id);
        $usuario->delete();
    
        return redirect()->route('usuarios.index');
    }
}
