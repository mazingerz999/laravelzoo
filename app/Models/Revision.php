<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Revision extends Model
{
    use HasFactory;
   protected $table = "revisiones";
   protected $guarded=[];


   public function animales()
 {
 return $this->belongsTo(Animal::class);
 }

}
