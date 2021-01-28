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
        $aux = Animal::findorFail($animal);
        return view("animales.show", ["animal" => $aux]);
        //  return view("animales.show", ['animal'=> $this->animales[$animal]]);
    }

    public function edit($animal) {
        $aux = Animal::find($animal);
        return view("animales.edit", ["animal" => $aux]);
    }

    public function store(Request $request) {
/*
Esta es la mejor forma de hacerlo:*/
 
        
  //return $request->all(); //esto me devuelve todos los datos
  
  $datos = $request->all(); //Esto me coge todos los datos del formulario
  $datos["imagen"]=$request->imagen->store('', 'animales');
  $animal=Animal:: create($datos);

      /*  
        $animal=new Animal();
        $animal->especie= $request->especie;
        $animal->peso= $request->peso;
        $animal->altura=$request->altura;
        $animal->fechaNacimiento= $request->fecha;
        $animal->imagen= $request->imagen->store('', 'animales');
        $animal->alimentacion=$request->alimentacion;
        $animal->descripcion = $request->descripcion;

        $animal ->save();*/
        
        //El with sirve para añadir un mensaje a el return
        return redirect()->route("animales.show", $animal->id)->with("mensaje", "Ha habido un error");
    }

    public function update(Request $request,$animal) {
         
        $aux = Animal::findorFail($animal);
        $aux->especie=$request->especie;
        $aux->peso= $request->peso;
        $aux->altura=$request->altura;
        $aux->fechaNacimiento= $request->fecha;
        $aux->imagen= $request->imagen->store('', 'animales');
        $aux->alimentacion=$request->alimentacion;
        $aux->descripcion = $request->descripcion;
        $aux->save();
        return view("animales.show", ["animal" => $aux])->with("mensaje", "Ha habido un error");
        
      
    }

}
