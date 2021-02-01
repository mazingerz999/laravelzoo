<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Animal;
use App\Models\Revision;

class RevisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
       public function run()
    {
         $revision=new Revision();
          //para que me devuelvas un aleatorio
         $revision->animal_id= Animal::all()->random()->id;
         $revision->fecha="2016-12-12";
         $revision->descripcion="Revisado por frank de la jungla";
         $revision->save();
         
         $revision2=new Revision();
         //para que me devuelvas el primero
         $revision2->animal_id=Animal::first()->id;
         $revision2->fecha="2016-12-12";
         $revision2->descripcion="Revisado por frank de la selva";

         
         $revision2->save();
    }
}
