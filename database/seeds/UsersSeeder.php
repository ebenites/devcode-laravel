<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
                [
                    'name' => 'Erick Benites',
                    'email' => 'ebenites@tecsup.edu.pe',
                    'password' => bcrypt('tecsup'),
                    'rol_id' => 1
                ],
                [
                    'name' => 'Jorge Flores',
                    'email' => 'jflores@tecsup.edu.pe',
                    'password' => bcrypt('tecsup'),
                    'rol_id' => 1
                ]
            ]);
        
    }
}
