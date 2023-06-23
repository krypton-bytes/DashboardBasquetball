<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//modelo entrenador
use App\Models\Entrenador;

class entrenadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Nombre = ["Pedro","Carlos","Cristiano","Lionel","Neymar","Kylian","Sergio","Luis","Sergio","Kevin"];
        $Apellido = ["Perez","Gonzalez","Ronaldo","Messi","Jr","Mbappe","Ramos","Suarez","Aguero","De Bruyne"];
        $Edad = ["30","35","36","34","29","22","35","33","32","30"];
        $Contacto = ["pedrocontacto@gmail.com","carloscontacto@gmail.com","cristianocontacto@gmail.com","lionelcontacto@gmail.com","neymacontacto@gmail.com","kyliancontacto@gmail.com","sergiocontacto@gmail.com","luiscontacto@gmail.com","sergiocontacto@gmail.com","kevincontacto@gmail.com"];
        for ($i=0; $i <= 29; $i++) {
            //generar random de  al 0 al 9
            $numero_aleatorio = rand(0, 9);
            $entrenador = new Entrenador();
            $entrenador->Nombre = $Nombre[$numero_aleatorio];
            $entrenador->Apellido = $Apellido[$numero_aleatorio];
            $entrenador->Edad = $Edad[$numero_aleatorio];
            $entrenador->Contacto = $Contacto[$numero_aleatorio];
            $entrenador->save();
        }
    }
}
