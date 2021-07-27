<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories =[
            //piel
            [
                'category_id' => 1,
                'name' => 'aceite',
                'slug' => Str::slug('aceite'),
                //'color' => true,

            ],

            [
                'category_id' => 1,
                'name' => 'shampoo',
                'slug' => Str::slug('shampoo'),
                //'color' => true,

            ],

            [
                'category_id' => 1,
                'name' => 'acondicionador',
                'slug' => Str::slug('acondicionador'),
                //'color' => true,

            ],

            [
                'category_id' => 3,
                'name' => 'pomada',
                'slug' => Str::slug('pomada'),
                //'color' => true,

            ],

            [
                'category_id' => 1,
                'name' => 'turbante',
                'slug' => Str::slug('turbante'),


            ],

            [
                'category_id' => 1,
                'name' => 'vincha',
                'slug' => Str::slug('vincha'),

            ],

            [
                'category_id' => 2,
                'name' => 'brocha',
                'slug' => Str::slug('brocha'),
                //'size' => true
            ],

            [
                'category_id' => 2,
                'name' => 'lapiz',
                'slug' => Str::slug('lapiz'),
                //'size' => true
            ],

            [
                'category_id' => 2,
                'name' => 'peine',
                'slug' => Str::slug('peine'),
                //'size' => true
            ],

            [
                'category_id' => 2,
                'name' => 'pinza',
                'slug' => Str::slug('pinza'),
                //'color' => true,
                //'size' => true
            ],

            [
                'category_id' => 2,
                'name' => 'tijera',
                'slug' => Str::slug('tijera'),
                //'color' => true,
                //'size' => true
            ],

            [
                'category_id' => 1,
                'name' => 'after',
                'slug' => Str::slug('after'),
                //'color' => true,
                //'size' => true
            ],

            [
                'category_id' => 3,
                'name' => 'gel',
                'slug' => Str::slug('gel'),
                //'color' => true,
                //'size' => true
            ],
            //Ojos
            [
                'category_id' => 8,
                'name' => 'pack',
                'slug' => Str::slug('pack'),
                //'color' => true,
                //'size' => true
            ],

            [
                'category_id' => 1,
                'name' => 'crema',
                'slug' => Str::slug('crema'),
                //'color' => true,
                //'size' => true
            ],

            [
                'category_id' => 4,
                'name' => 'depilador',
                'slug' => Str::slug('depilador'),
                //'color' => true,
                //'size' => true
            ],

            [
                'category_id' => 4,
                'name' => 'rasurador',
                'slug' => Str::slug('rasurador'),
                //'color' => true,
                //'size' => true
            ],

            [
                'category_id' => 5,
                'name' => 'labial',
                'slug' => Str::slug('labial'),
                //'color' => true,
                //'size' => true
            ],

            [
                'category_id' => 6,
                'name' => 'delineador',
                'slug' => Str::slug('delineador'),
                //'color' => true,
                //'size' => true
            ],

            //Labios
            [
                ////////////////////////////////////////////
                'category_id' => 9,
                'name' => 'desinfectante',
                'slug' => Str::slug('desinfectante'),
                //'color' => true,
                //'size' => true
            ],

            [
                'category_id' => 6,
                'name' => 'paleta',
                'slug' => Str::slug('paleta'),
                //'color' => true,
                //'size' => true
            ],

            [
                'category_id' => 6,
                'name' => 'plumon',
                'slug' => Str::slug('plumon'),
                //'color' => true,
                //'size' => true
            ],

            [
                'category_id' => 1,
                'name' => 'champu',
                'slug' => Str::slug('champu'),
                //'color' => true,
                //'size' => true
            ],

            [
                ////////////////////////////////////////
                'category_id' => 9,
                'name' => 'corrector',
                'slug' => Str::slug('corrector'),
                //'color' => true,
                //'size' => true
            ],
            //Cabello
            [
                'category_id' => 6,
                'name' => 'limpiador',
                'slug' => Str::slug('limpiador'),
                //'color' => true,
                //'size' => true
            ],

            [
                ///////////////////////////////////////////////////
                'category_id' => 9,
                'name' => 'protector solar',
                'slug' => Str::slug('protector solar'),
                //'color' => true,
                //'size' => true
            ],

            [
                'category_id' => 7,
                'name' => 'perfume',
                'slug' => Str::slug('perfume'),
                //'color' => true,
                //'size' => true
            ],
        ];

        foreach($subcategories as $subcategory)
        {
            Subcategory::create($subcategory);
        }
    }
}
