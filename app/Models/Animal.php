<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model {

    use HasFactory;

    protected $table = "Animales";
    protected $guarded = []; //con este array vale para evitar el error del token que viene de el campo de seguridad

    // protected $filable=['especie'...] //asi hasta todos los campos que queremos

    public function getEdad() {
        $fechaFormateada = Carbon::parse($this->fechaNacimiento);
        return $fechaFormateada->diffInYears(Carbon::now());
    }

    public function getRouteKeyName() {
        return 'slug';
    }

    public function revisiones() {
        return $this->hasMany(Revision::class);
    }

    //Relación muchos a muchos
    public function cuidadores() {
        return $this->belongsToMany(Cuidador::class);
    }

}
