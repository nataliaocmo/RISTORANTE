<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Asegúrate de importar el modelo User o el que estés utilizando

class UserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Valida los datos del formulario si es necesario

        // Crea un nuevo usuario usando Eloquent
        $user = new User([
            'name' => $request->input('nombre'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'password' => $request->input('password'),
            // Agrega otros campos según tu modelo
        ]);

        // Guarda el nuevo usuario en la base de datos
        $user->save();

        return response()->json(['message' => 'Usuario creado correctamente'], 201);
    }
}