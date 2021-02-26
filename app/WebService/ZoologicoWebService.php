<?php


use App\Models\Animal;
use \Illuminate\Support\Facades\Request;


class ZoologicoWebService
{

    /**
     * @param string $correo
     * @param string $password
     * @return bool
     */
    public function login($correo, $password)
    {
        return \Illuminate\Support\Facades\Auth::attempt(['email'=>$correo, "password"=>$password]);
    }

    /**
     * @param integer $animal
     * @return App\Models\Animal
     */
    public function getAnimal($animal)
    {
        return Animal::find($animal);

    }

    /**
     * @return array
     */
    public function getAnimales()
    {

        $animales = Animal::all();

        return (compact("animales"));

    }

    /**
     * @param $req
     * @return array
     */
    public function getAnimalesAlimentacion($req)
    {

        $animalAlimentacion=Animal::all()->where("alimentacion", "=", "$req")->get();

        return (compact("animalAlimentacion"));
    }

    /**
     * @param $req
     * @return array
     */
    public function busqueda( $req) {
        $animalBusca = Animal::where("especie", "like", "%".$req."%")->get();

        return ( compact('animalBusca'));
    }
}
