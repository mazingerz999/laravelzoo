<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RestWebServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $animales=Animal::all();
    return response()->json($animales);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $animal=new Animal();
      $animal->especie= $request->especie;
      $animal->peso= $request->peso;
      $animal->slug= Str::slug($request->especie);
      $animal->altura=$request->altura;
      $animal->fechaNacimiento= $request->fecha;
      $animal->imagen= $request->imagen;
      $animal->alimentacion=$request->alimentacion;
      $animal->descripcion = $request->descripcion;

      $animal ->save();

        return response()->json(['mensaje'=>"Animal {$animal}"]);

    }

    /**
     * Display the specified resource.
     *
     * @param  Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {

        return response()->json($animal);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {


        $animal->delete();
        return response()->json(['mensaje'=>"Animal{$animal}"]);
    }
}
