<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller {

    //
    public function index() {
        return view("animales.index");
    }

    public function create() {
        return view("animales.create");
    }

    public function show($animales) {
        return view("animales.show, array('animales'=>$animales)");
    }

    public function edit($animales) {
        return view("animales.edit, array('animales'=>$animales)");
    }

}
