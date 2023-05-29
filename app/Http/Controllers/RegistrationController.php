<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\UserU;

class RegistrationController extends Controller
{
    public function RegistrationController(Request $request){
     // Obtener los datos del formulario
     $firstName = $request->input('first_name');
     $lastName = $request->input('last_name');
     $email = $request->input('email');
     $password = $request->input('password');
     $repeatPassword = $request->input('repeat_password');

     // Almacenar los datos en la base de datos
     $user = new UserU();
     $user->Nombre = $firstName;
     $user->Apellidos = $lastName;
     $user->Correo = $email;
     $user->Password = $password;
     $user->save();

     // Redireccionar al usuario o mostrar una respuesta exitosa
     return redirect()->back()->with('success', '¡Formulario enviado con éxito!');
    } 
}
