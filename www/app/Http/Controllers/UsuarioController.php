<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UsuarioController extends Controller
{
    public function usuarioEditar($name)
    {
        $usuario = User::find($name);

        return view('/usuario/editar', array(
            'usuario' => $usuario
       ));
    }
}
