<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Esteban',
            'username' => 'esAdmin',
            'email' => 'esteban@orix.es',
            'password' => Hash::make('Orix2019'),
            'role_id' => 1,
        ]);
    }
}
