<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $usuario=new User();
         $usuario->name="alberto";
         $usuario->email="josealberto.lavingonzalez@iesmiguelherrero.com";
         $usuario->password=bcrypt("usuario@1");

         $usuario->save();
    }
    
    
}
