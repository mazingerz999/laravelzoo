<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;


class AnimalController extends Controller {

    
    
    public function index() {
        $animales = Animal::all();
       // return view("animales.index", ['animales'=> $this->animales]);
       return view("animales.index", compact("animales"));
       
    }

    public function create() {
        return view("animales.create");
    }

 
    public function show($animal) {
       $aux= Animal::findorFail($animal);
        return view("animales.show", ["animal"=>$aux]);
       //  return view("animales.show", ['animal'=> $this->animales[$animal]]);
    }

    public function edit($animal) {
        $aux= Animal::find($animal);
        return view("animales.edit", ["animal"=>$aux]);
        
    }

}

