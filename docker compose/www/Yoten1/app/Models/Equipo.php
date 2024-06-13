<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Equipo extends Model
{
    use HasFactory;

    protected $table = 'equipo';

    // protected $fillable = [
    //     'Img',
    //     'Nombre',
    //     'Descripcion',
    //     'idActividad'
    // ];

    // public $timestamps = true;

    protected $guarded = [];
    protected $hidden = ["created_at", "updated_at"];

     
    // public function actividadNocturna()
    // {
    //     return $this->belongsTo(ActividadNocturna::class, 'idActividad');
    // }
}
