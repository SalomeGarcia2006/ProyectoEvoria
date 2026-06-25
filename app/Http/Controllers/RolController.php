<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index()
    {
        return Rol::all();
    }

    public function store(Request $request)
    {
        $rol = Rol::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion
        ]);

        return response()->json($rol);
    }

    public function show($id)
    {
        return Rol::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $rol = Rol::findOrFail($id);

        $rol->update($request->all());

        return response()->json($rol);
    }

    public function destroy($id)
    {
        Rol::destroy($id);

        return response()->json([
            'mensaje' => 'Rol eliminado'
        ]);
    }
}