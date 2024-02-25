<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\clientes;


class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::insert('INSERT INTO `cliente_empresa`(`cliente_id`, `empresa_id`, `created_at`, `updated_at`) 
        // VALUES (?,?,?,?)',
        // [1, 1,date('y-m-d H:i:s'),date('y-m-d H:i:s'),]);
        clientes::factory()->count(100)->create();
    }
}
