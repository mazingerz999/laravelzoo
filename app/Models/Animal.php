<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $table="Animales";
    
    public function getEdad()
{
 $fechaFormateada=Carbon::parse($this->fechaNacimiento);
 return $fechaFormateada->diffInYears(Carbon::now());
}
}
