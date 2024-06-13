<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    // protected $table = 'equipo';

     // public $timestamps = true;


     protected $guarded = [];
     protected $hidden = ["created_at", "updated_at"];


}
