<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tarea extends Model
{
    use HasFactory;

    protected $guarded = [];
/*
    protected $fillable = ["nombre", "descripcion"];  */

    protected $hidden = ["created_at", "updated_at"];
    // protected $table = 'tareas';

    public function etiquetas(): BelongsToMany{
        
        return $this->belongsToMany(Etiqueta::class, 'tareas_etiquetas', 'tarea_id', 'etiqueta_id');

    }
}
