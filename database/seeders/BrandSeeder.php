<?php

namespace Database\Seeders;
use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            [
                'name' => 'Via',
            ],
            [
                'name' => 'Reuzel',
            ],
            [
                'name' => 'Aluvia',
            ],
            [
                'name' => 'Haro',
            ],
            [
                'name' => 'Rude',
            ],
            [
                'name' => 'Tweezerman',
            ],
            [
                'name' => 'Kara Beauty',
            ],
            [
                'name' => 'Ecobag',
            ],
            [
                'name' => 'Stainless',
            ],
            [
                'name' => 'La Roche Posay',
            ],
            [
                'name' => 'Good Molecules',
            ],
            [
                'name' => 'Yes',
            ],
            [
                'name' => 'Philips',
            ],
            [
                'name' => 'Kemel',
            ],
            [
                'name' => 'Bioderma',
            ],
            [
                'name' => 'Colour Pop',
            ],
            [
                'name' => 'Inglote',
            ],
            [
                'name' => 'Cinema Secrets',
            ],
            [
                'name' => 'Holy Bloom',
            ],
            [
                'name' => 'Bissu',
            ],
            [
                'name' => 'CK Shock',
            ],
            [
                'name' => 'Carolina Herrera',
            ],
            [
                'name' => 'Paco Rabanne',
            ],
            [
                'name' => 'Clinique',
            ],
            [
                'name' => 'DKNY',
            ],
            [
                'name' => 'Hugo',
            ],
            [
                'name' => 'Tommy',
            ],
            [
                'name' => 'Cerave',
            ],
            [
                'name' => 'Elf',
            ],
        ];
        foreach($brands as $brand)
        {
            Brand::create($brand);
        }
    }
}
