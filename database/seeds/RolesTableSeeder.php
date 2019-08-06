<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role_name' => 'admin',
            'public_name' => 'Administrador',
        ]);

		DB::table('roles')->insert([
            'role_name' => 'user',
            'public_name' => 'Usuario',
        ]);
    }
}
