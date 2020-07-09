<?php

use Illuminate\Database\Seeder;

class users_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role' => 'user',
            'name' => 'Marcos',
            'surname' => 'Martinez',
            'nick' => 'mmartinez',
            'email' => 'martinez@correo.com',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('users')->insert([
            'role' => 'admin',
            'name' => 'admin',
            'surname' => 'admin',
            'nick' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
