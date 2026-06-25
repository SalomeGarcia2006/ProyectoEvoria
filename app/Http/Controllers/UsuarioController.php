<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
   public function index()
{
    $usuarios = Usuario::all();

    return view(
        'usuarios.index',
        compact('usuarios')
    );
}
    public function store(Request $request)
    {
        $usuario = Usuario::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'correo' => $request->correo,
            'contrasena_hash' => bcrypt($request->password),
            'telefono' => $request->telefono,
            'estado' => 'activo',
            'id_rol' => $request->id_rol
        ]);

        return response()->json($usuario);
    }

    // MOSTRAR UNO
    public function show($id)
    {
        return Usuario::findOrFail($id);
    }

    // ACTUALIZAR
    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);

        $usuario->update($request->all());

        return response()->json($usuario);
    }

    // ELIMINAR
    public function destroy($id)
    {
        Usuario::destroy($id);

        return response()->json([
            'mensaje' => 'Usuario eliminado'
        ]);
    }
}