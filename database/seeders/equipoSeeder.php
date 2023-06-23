<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//modelo equipo
use App\Models\Equipo;

class equipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Nombre = ["IBIME","AZTKS V.","AZTKS.M","KAUYURAMI","BULLERS","AZTKS A","AZTKS B","AGUILAS EH","IBIME ROJO","CASA BLANCA","ORLANDO","IBIME AZUL","IBIME BLANCO","AZTKS A","AZTKS B","ZORROS BLANCO","KAYUMARI","ORLANDO","IBIME","AZTKS","ONIX","OSOS","KAYUMARI","ZORROS BLANCOS","SEVEN KINGS","BULLERS","NUGGETS"];
        $Categoria = ["MICRO","MINI","PASARELA","CADETE","JUVENIL"];
        $Copa = ["1 COPA","2 COPA","3 COPA","4 COPA"];
        $Generacion = ["2010","2009","2008","2007","2006","2005","2004","2003","2002","2001"];
        $Entrenador = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29];
        foreach ($Nombre as $equipo) {
            $equipoModel = new Equipo();
            $equipoModel->Nombre = $equipo;
            $equipoModel->Categoria = $Categoria[rand(0, count($Categoria) - 1)];
            $equipoModel->Generacion = $Generacion[rand(0, count($Generacion) - 1)];
            $equipoModel->Copa = $Copa[rand(0, count($Copa) - 1)];
            $equipoModel->entrenador_id = $Entrenador[rand(0, count($Entrenador) - 1)];
            $equipoModel->save();
        }
    }
}
