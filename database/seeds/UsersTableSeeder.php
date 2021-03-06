<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
            'dni' => '00000000',
            'nombres' => 'admin',
            'apellidos' => '',
            'activo' => 1,
            'borrado' => 0,
        ]);
        DB::table('tipousuarios')->insert([
            'tipo' => 'ADMINISTRADOR',
            'activo' => 1,
            'borrado' => 0
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'activo' => 1,
            'borrado' => 0,
            'imagen' => 'admin.png',
            'tipousuario_id' => 1,
            'persona_id' => 1
        ]);
    }
}
