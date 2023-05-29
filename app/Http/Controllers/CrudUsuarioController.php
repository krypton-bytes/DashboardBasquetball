<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//modelo de la base de datos UserU
use App\Models\UserU;

class CrudUsuarioController extends Controller
{
    public function index()
    {
        $users = UserU::where('permiso', 0)->get();
        $admin = UserU::where('permiso', 1)
            ->where('id', '!=', function ($query) {
                $query->select('id')
                    ->from('user')
                    ->where('permiso', 1)
                    ->orderBy('id')
                    ->limit(1);
            })
            ->get();
        return view('admin.CRUD.Usuarios', compact('users', 'admin'));
    }
    public function index2()
    {
        $users = UserU::where('permiso', 0)->get();
        $admin = UserU::where('permiso', 1)
            ->where('id', '!=', function ($query) {
                $query->select('id')
                    ->from('user')
                    ->where('permiso', 1)
                    ->orderBy('id')
                    ->limit(1);
            })
            ->get();
        return view('admin.CRUD.Administradores', compact('users', 'admin'));
    }
    public function destroy($id)
    {
        $registro = UserU::find($id);
        if ($registro) {
            $registro->delete();
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }
    public function edit($id)
{
    $user = UserU::find($id);
    // Verificar si se encontró el usuario
    if ($user) {
        // Retornar la vista de edición con los datos del usuario
        return view('admin.CRUD.editar-usuario', compact('user'));
    } else {
        // Si no se encuentra el usuario, redirigir o mostrar un mensaje de error
        return redirect()->back()->with('error', 'No se encontró el usuario');
    }
}

    public function update(Request $request, $id)
    {
        $user = UserU::find($id);

        // Validar los datos del formulario de edición
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'correo' => 'required|email',
        ]);

        // Actualizar los datos del usuario
        $user->Nombre = $request->nombre;
        $user->Apellidos = $request->apellidos;
        $user->Correo = $request->correo;
        // Actualizar otros campos según sea necesario

        // Guardar los cambios en la base de datos
        $user->save();

        // Enviar una respuesta JSON con los datos actualizados del usuario
        return response()->json([
            'Nombre' => $user->Nombre,
            'Apellidos' => $user->Apellidos,
            'Correo' => $user->Correo,
        ]);
    }
}
