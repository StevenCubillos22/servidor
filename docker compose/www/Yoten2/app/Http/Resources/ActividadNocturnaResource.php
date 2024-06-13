<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ActividadNocturnaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'titulo' => 'Titulo: ' .$this->titulo,
            'precio' => 'Precio: ' .$this->precio,
            'ubicacion' => 'Ubicacion: ' .$this->ubicacion,
            'equipo' => $this->equipo!=null?$this->equipo->pluck('nombre'):[]
        ];

    }
}
