<?php

namespace Database\Seeders;
use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'name'=>'Categoria A1',
            'project_id' => 1

        ]);

        Categoria::create([
            'name'=>'Categoria A2',
            'project_id' => 1

        ]);

        Categoria::create([
            'name'=>'Categoria B1',
            'project_id' => 2

        ]);

        Categoria::create([
            'name'=>'Categoria B2',
            'project_id' => 2

        ]);






        
    }
}
