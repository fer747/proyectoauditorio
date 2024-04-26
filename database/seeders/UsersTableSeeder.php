<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin
        User::create([
            'name'=>'Juan',
            'email'=>'juancagb.17@gmail.com',
            'password'=>bcrypt('12345678'),
            'role'=>0

        ]);
        //Soporte
        User::create([
            'name'=>'Jorge',
            'email'=>'soporte@gmail.com',
            'password'=>bcrypt('12345678'),
            'role'=>1

        ]);

        //usuario,cliente o socio
        User::create([
            'name'=>'Maria',
            'email'=>'maria@gmail.com',
            'password'=>bcrypt('12345678'),
            'role'=>2

        ]);


    }
}
