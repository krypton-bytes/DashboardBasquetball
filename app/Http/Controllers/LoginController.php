<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserU;

class LoginController extends Controller
{
    public function logout()
    {
        // Cerrar sesión
        session()->flush();
        return redirect()->route('login');
    }

    public function index(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        // Verificar si el usuario existe en la base de datos
        $user = UserU::where('Correo', $email)->first();

        if ($user) {
            // Verificar si la contraseña es correcta
            if ($user->Password == $password) {
                // Iniciar sesión
                session([
                    'id' => $user->id,
                    'nombre' => $user->Nombre,
                    'apellidos' => $user->Apellidos,
                    'correo' => $user->Correo,
                    'permiso' => $user->Permiso // Corrige el nombre aquí
                ]);
                if ($user->Permiso == 1) {
                    return redirect()->route('adminCrudAdministradores');
                } else {
                    // Redirigir a la página correspondiente para usuarios con permiso distinto de 1
                    return redirect()->route('otraRuta');
                }
            } else {
                // Contraseña incorrecta
                return redirect()->back()->with('error', 'Contraseña incorrecta');
            }
        } else {
            // Usuario no encontrado
            return redirect()->back()->with('error', 'No se encontró el usuario');
        }
    }
}
