<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RevisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(\App\Models\Animal $animal)
    {
         return view("revisiones.create", ["animal" => $animal]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, \App\Models\Animal $animal)
    {

        //Esto me coge todos los datos del formulario
        
        $datos=$request->all();
        $datos['animal_id'] = $animal->id;
        $revision= \App\Models\Revision::create($datos);
        return redirect()->route("animales.show", $animal)->with("mensaje", "Ha habido un error");
    }

    
}
