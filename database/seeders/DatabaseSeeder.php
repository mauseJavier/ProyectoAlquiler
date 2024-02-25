<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(ClientesSeeder::class);

        
        // \App\Models\clientes::factory()->create([
        //     'nombre' => 'javer',
        //     'dni' => '4234234',
        //     'provincia' => 'nqn',
        //     'localidad' => 'las lajas',
        //     'direccion' => 'las lajas',
        //     'telefono' => '234',
        //     'correo' => 'correo',
        // ]);


    }
}
