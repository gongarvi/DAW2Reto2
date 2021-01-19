<?php

namespace Database\Seeders;

use App\Models\Especialidad;
use App\Models\Mujer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
         $this->especialidades(); 
        $this->mujeres();
    }

    // los datos para la tabla de especialidades
     private function especialidades(){

        $file = fopen('public\assets\CSVs\Especialidades.csv', "r");
        $data = array();
        $i = 0;
        while (($filedata = fgetcsv($file, 1000, ";")) !== FALSE) {
            $num = count($filedata );
            // Skip first row (Remove below comment if you want to skip the first row)
            if($i == 0){
                $i++;
                continue;
            }
            for ($c=0; $c < $num; $c++) {
               $data[$i][] = $filedata [$c];
            }
            $i++;
         }
         fclose($file);

        // Insert to MySQL database
        foreach($data as $importData){
            $especialidad = new Especialidad();
            $especialidad->id=$importData[0];
            $especialidad->nombreE=$importData[1];
            $especialidad->color=$importData[2];
            $especialidad->save();
        }

    }
 
    // los datos para la tabla de mujeres
    private function mujeres(){

        $file = fopen('public\assets\CSVs\mujeres.csv', "r");
        $data = array();
        $i = 0;
        while (($filedata = fgetcsv($file, 1000, ';')) !== FALSE) {
            $num = count($filedata );
            // Skip first row (Remove below comment if you want to skip the first row)
            if($i == 0){
                $i++;
                continue;
            }
            for ($c=0; $c < $num; $c++) {
               $data[$i][] = $filedata [$c];
            }
            $i++;
         }
         fclose($file);

        // Insert to MySQL database
        foreach($data as $importData){
            $mujer = new Mujer();
            $mujer->nombre=$importData[0];
            $mujer->apellidos=$importData[1];
            $mujer->nacimiento=$importData[2];
            $mujer->fallecido=$importData[3];
            $mujer->especialidad=$importData[4];
            $mujer->descripcion=$importData[5];
            $mujer->foto=$importData[6];
            $mujer->nacionalidad=$importData[7];
            $mujer->save();
        }

    }
}
