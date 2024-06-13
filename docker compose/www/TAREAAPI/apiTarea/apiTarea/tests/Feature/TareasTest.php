<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Tarea;
use App\Models\User;

class TareasTest extends TestCase
{
    use RefreshDatabase;
    public function test_get_tareas()
    {
        $user = User::factory()->create();

        $tareas = new Tarea();
        $tareas->nombre = "Amarre";
        $tareas->descripcion = "Amarrar correa del perro";
        $tareas->save();

    
        $response = $this->actingAs($user)->withSession(['banned' => false])->getJson('api/tareas');
        $response->assertStatus(200);

        $response->assertJsonFragment([
            [
                'id' => $tareas->id,
                'nombre' => 'Nombre ' . $tareas->nombre,
                'descripcion' => 'Desc: ' . $tareas->descripcion,
                'algo' => 'tortilla',
                'etiqueta' => $tareas->etiquetas != null && $tareas->etiquetas->isNotEmpty() ?
                    $tareas->etiquetas->pluck('nombre') : 'No hay etiquetas asociadas'
            ]
        ]);
        
    }
    
    public function test_update_tarea()
    {

        $user = User::factory()->create();

        // Creamos una tarea para que se actualize
        $tarea = new Tarea();
        $tarea->nombre = "Actualizar";
        $tarea->descripcion = "Limpiar escritorio";
        $tarea->save();

       
        $updatedData = [
            'nombre' => 'UpdateName',
            'descripcion' => 'UpdateDesc',
        ];

        //  Enviamos la solicitud de actualización 
        $response = $this->actingAs($user)->withSession(['banned' => false])->putJson("api/tareas/{$tarea->id}", $updatedData);
        $response->assertStatus(200);

        
        $tarea->refresh();

        // Verificamos la actualizacion en la BBDD
        $this->assertEquals($updatedData['nombre'], $tarea->nombre);
        $this->assertEquals($updatedData['descripcion'], $tarea->descripcion);
    }
    public function test_delete_tarea()
    {   
        $user = User::factory()->create();

        // Creamos una tarea para ser eliminada
        $tarea = new Tarea();
        $tarea->nombre = "DeletedName";
        $tarea->descripcion = "DeletedDesc";
        $tarea->save();

        // Enviamos la solicitud de eliminación a la API
        $response = $this->actingAs($user)->withSession(['banned' => false])->deleteJson("api/tareas/{$tarea->id}");
        $response->assertStatus(200);

        // Verificamos la eliminacion de la tarea
        $this->assertNull(Tarea::find($tarea->id));
    }

    public function test_insert_tarea()
    {
        $user = User::factory()->create();

        
        $newTareaData = [
            'nombre' => 'Titulo8',
            'descripcion' => 'Descripcion8',
        ];

        // Enviamos la solicitud de inserción
        $response = $this->actingAs($user)->withSession(['banned' => false])->postJson('api/tareas', $newTareaData);
        $response->assertStatus(201); // Verifica que la tarea ha sido creada exitosamente

        // Verificar que la tarea ha sido insertada en la bbdd
        $this->assertDatabaseHas('tareas', [
            'nombre' => $newTareaData['nombre'],
            'descripcion' => $newTareaData['descripcion'],
        ]);
    }
}
