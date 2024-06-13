<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadNocturna extends Model
{
    use HasFactory;

    protected $table = 'actividad_nocturna';     

    protected $guarded = [];
    protected $hidden = ["created_at", "updated_at"];
    

    public function equipos(): BelongsToMany 
    {
        return $this->belongsToMany(Equipo::class, 'actividades_equipos', 'actividad_id', 'equipo_id');
    }
}
