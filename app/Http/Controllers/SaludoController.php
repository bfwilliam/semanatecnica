<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function mostrarSaludo() {
        $nombre = 'Jorge';
        return view('bienvenida', ['nombre' => $nombre]);
    }
}
