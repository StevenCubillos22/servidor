<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Etiqueta;

class EtiquetaTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */

    public function test_get_labels()
    {
        $user = User::create([
            'name' => 'algo',
            'email' => 'texas@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $response = $this->actingAs($user)->get('/api/etiquetas');

        $response->assertStatus(200);
    }

    public function test_make_label()
    {
        $user = User::create([
            'name' => 'maria',
            'email' => 'francia@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $this->actingAs($user);

        $datosEtiqueta = [
            'nombre' => 'Club',
        ];

        $response = $this->post('/api/etiquetas', $datosEtiqueta);

        $this->assertDatabaseHas('etiquetas', [
            'nombre' => 'Club',
        ]);

        $response->assertStatus(201);
    }

    public function test_get_one_label()
    {
        $user = User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $etiqueta = Etiqueta::create([
            'nombre' => 'Nombre',
        ]);

        $response = $this->actingAs($user)->get('/api/etiquetas/' . $etiqueta->id);

        $response->assertStatus(200);

        $response->assertJsonFragment([
            'id' => $etiqueta->id,
            'nombre' => 'Nombre: ' . $etiqueta->nombre,
        ]);
    }

    public function test_update_label()
    {
        $user = User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $etiqueta = Etiqueta::create([
            'nombre' => 'Nombre',
        ]);

        $datosActualizados = [
            'nombre' => 'Nuevo',
        ];

        $response = $this->actingAs($user)->put('/api/etiquetas/' . $etiqueta->id, $datosActualizados);
        $response->assertStatus(200);
        $etiqueta->refresh();
        $this->assertEquals('Nuevo', $etiqueta->nombre);
    }

    public function test_delete_label()
    {
        $user = User::create([
            'name' => 'paco',
            'email' => 'torre@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $etiqueta = Etiqueta::create([
            'nombre' => 'Nombre',
        ]);

        $response = $this->actingAs($user)->delete('/api/etiquetas/' . $etiqueta->id);

        $response->assertStatus(200);

        $this->assertDatabaseMissing('etiquetas', [
            'id' => $etiqueta->id,
        ]);
    }
}