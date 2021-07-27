<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'id'=>'1',
                'name' => 'Cabello',
                'slug' => Str::slug('Cabello'),
                'image' => '../img/categories/cabello.jpg',
                'icon' =>'<i class="fas fa-female"></i>'
            ],

            [
                'id'=>'2',
                'name' => 'Cejas',
                'slug' => Str::slug('Cejas'),
                'image' => '../img/categories/cejas.jpg',
                'icon' => '<i class="far fa-eye"></i>'
            ],
            [
                'id'=>'3',
                'name' => 'Cuidado Personal',
                'slug' => Str::slug('Cuidado Personal'),
                'image' => '../img/categories/cuidadopersonal.jpg',
                'icon' => '<i class="fas fa-grin-alt"></i>'

            ],
            [
                'id'=>'4',
                'name' => 'Depilador',
                'slug' => Str::slug('Depilador'),
                'image' => '../img/categories/depilador.jpg',
                'icon' => '<i class="fas fa-air-freshener"></i>'
            ],
            [
                'id'=>'5',
                'name' => 'Labios',
                'slug' => Str::slug('Labios'),
                'image' => '../img/categories/labios.jpg',
                'icon' => '<i class="fas fa-hand-sparkles"></i>'
            ],

            [
                'id'=>'6',
                'name' => 'Ojos',
                'slug' => Str::slug('Ojos'),
                'image' => '../img/categories/ojos.jpg',
                'icon' => '<i class="fas fa-pump-soap"></i>'
            ],
            [
                'id'=>'7',
                'name' => 'Perfumes',
                'slug' => Str::slug('Perfumes'),
                'image' => '../img/categories/perfumes.jpg',
                'icon' => '<i class="fas fa-ring"></i>'
            ],
            [
                'id'=>'8',
                'name' => 'Piel',
                'slug' => Str::slug('Piel'),
                'image' => '../img/categories/piel.jpg',
                'icon' => '<i class="fas fa-sun"></i>'
            ],
            [
                'id'=>'9',
                'name' => 'Rostro',
                'slug' => Str::slug('Rostro'),
                'image' => '../img/categories/rostro.jpg',
                'icon' => '<i class="fas fa-magic"></i>'
            ],
        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
