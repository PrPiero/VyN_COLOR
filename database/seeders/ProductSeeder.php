<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Support\Str;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productos = [

            [
                'name' => 'Aceite de ARGAN',
                'slug' => Str::slug('Aceite de ARGAN'),
                'description' => 'Aceite de argan ultra care morocan',
                'price' =>'11',
                'subcategory_id' => '1',
                'brand_id' => '1',
                'quantity' => '10',
                'status' => '2'

            ],
            [
                'name' => 'Aceite de COCO',
                'slug' => Str::slug('Aceite de COCO'),
                'description' => 'Aceite de coco ultra care coconut',
                'price' =>'13',
                'subcategory_id' => '1',
                'brand_id' => '1',
                'quantity' => '10',
                'status' => '2'

            ],
            [
                'name' => 'Aceite de VITAMINA E',
                'slug' => Str::slug('Aceite de VITAMINA E'),
                'description' => 'Aceite de Vitamin E oil',
                'price' =>'12',
                'subcategory_id' => '1',
                'brand_id' => '1',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Aceite de VITAMINA E',
                'slug' => Str::slug('After Shave 100 ml REUZEL'),
                'description' => 'After Shave Reuzel',
                'price' =>'12',
                'subcategory_id' => '1',
                'brand_id' => '2',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Daily Conditioner 350 ml REUZEL',
                'slug' => Str::slug('Daily Conditioner 350 ml REUZEL'),
                'description' => 'Daily conditioner quoidem reuzel',
                'price' =>'12',
                'subcategory_id' => '3',
                'brand_id' => '2',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Daily Shampoo 350 ml REUZEL',
                'slug' => Str::slug('Daily Shampoo 350 ml REUZEL'),
                'description' => 'Aceite de Vitamin E oil',
                'price' =>'12',
                'subcategory_id' => '2',
                'brand_id' => '2',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'POMADA Clay Matte REUZEL 4 Oz. Cabello Débil Y Delgado',
                'slug' => Str::slug('POMADA Clay Matte REUZEL 4 Oz. Cabello Débil Y Delgado'),
                'description' => 'Pomada matte clay reuzel',
                'price' =>'12',
                'subcategory_id' => '4',
                'brand_id' => '2',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Pomada Green Grease Reuzel 4 Oz. Base De Cera Y Aceite',
                'slug' => Str::slug('Pomada Green Grease Reuzel 4 Oz. Base De Cera Y Aceite'),
                'description' => 'Podama grease medium reuzel',
                'price' =>'12',
                'subcategory_id' => '4',
                'brand_id' => '2',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'POMADA Water Soluble Red 4 Oz. Soluble al agua',
                'slug' => Str::slug('POMADA Water Soluble Red 4 Oz. Soluble al agua'),
                'description' => 'Pomada water soluble sheen reuzel',
                'price' =>'12',
                'subcategory_id' => '4',
                'brand_id' => '2',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Shave Cream 1 Oz. REUZEL',
                'slug' => Str::slug('Shave Cream 1 Oz. REUZEL'),
                'description' => 'Shave-creme a raser',
                'price' =>'12',
                'subcategory_id' => '15',
                'brand_id' => '2',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Turbante de Secado Rápido ALUVIA',
                'slug' => Str::slug('Turbante de Secado Rápido ALUVIA'),
                'description' => 'Turbante para secar el cabello',
                'price' =>'12',
                'subcategory_id' => '5',
                'brand_id' => '3',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Vincha de algodón NEGRA',
                'slug' => Str::slug('Vincha de algodón NEGRA'),
                'description' => 'Vincha de algodón color negro',
                'price' =>'12',
                'subcategory_id' => '6',
                'brand_id' => '4',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Brocha para cejas',
                'slug' => Str::slug('Brocha para cejas'),
                'description' => 'Brocha de color negro para cejas',
                'price' =>'12',
                'subcategory_id' => '7',
                'brand_id' => '5',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Lapiz de CEJAS Rude Cosmetics',
                'slug' => Str::slug('Lápiz de CEJAS Rude Cosmetics'),
                'description' => 'Lapiz para cejas marca rude',
                'price' =>'12',
                'subcategory_id' => '8',
                'brand_id' => '4',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Peine para pestañas y cejas desechables',
                'slug' => Str::slug('Peine para pestañas y cejas desechables'),
                'description' => 'Peine para pestañas y cejas en diferentes colores',
                'price' =>'12',
                'subcategory_id' => '9',
                'brand_id' => '6',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Pinza De Cejas Profesional En Punta de ACERO INOXIDABLE',
                'slug' => Str::slug('Pinza De Cejas Profesional En Punta de ACERO INOXIDABLE'),
                'description' => 'Pinza de cejas color negro con punta de acero inoxidable',
                'price' =>'12',
                'subcategory_id' => '10',
                'brand_id' => '6',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Pinza Slant Profesional de ACERO INOXIDABLE',
                'slug' => Str::slug('Pinza Slant Profesional de ACERO INOXIDABLE'),
                'description' => 'Aceite de Vitamin E oil',
                'price' =>'12',
                'subcategory_id' => '10',
                'brand_id' => '6',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Pinza Slant Profesional NEGRA de ACERO INOXIDABLE',
                'slug' => Str::slug('Pinza Slant Profesional NEGRA de ACERO INOXIDABLE'),
                'description' => 'Pinza slant de acero inoxidable color negro marca tweezerman',
                'price' =>'12',
                'subcategory_id' => '10',
                'brand_id' => '6',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Pinza Slant Profesional ROJA de ACERO INOXIDABLE',
                'slug' => Str::slug('Pinza Slant Profesional ROJA de ACERO INOXIDABLE'),
                'description' => 'Pinza slant profesional color rojo de acero inoxidable',
                'price' =>'12',
                'subcategory_id' => '10',
                'brand_id' => '7',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Pomada de Cejas Marrón Oscuro',
                'slug' => Str::slug('Pomada de Cejas Marrón Oscuro'),
                'description' => 'Pomada de cejas color marron marca kara bauty',
                'price' =>'12',
                'subcategory_id' => '4',
                'brand_id' => '8',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'SERUM FORTALECEDOR de cejas y pestañas',
                'slug' => Str::slug('SERUM FORTALECEDOR de cejas y pestañas'),
                'description' => 'Serum para cejas y pestañas',
                'price' =>'12',
                'subcategory_id' => '19',
                'brand_id' => '9',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Tijera ROSE GOLD',
                'slug' => Str::slug('Tijera ROSE GOLD'),
                'description' => 'Tijera color rosa para cejas',
                'price' =>'12',
                'subcategory_id' => '11',
                'brand_id' => '2',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'After Shave 100 ml REUZEL',
                'slug' => Str::slug('After Shave 100 ml REUZEL'),
                'description' => 'After Shave apres rasage para cuidado personal',
                'price' =>'12',
                'subcategory_id' => '12',
                'brand_id' => '2',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Daily Conditioner 350 ml REUZEL',
                'slug' => Str::slug('Daily Conditioner 350 ml REUZEL'),
                'description' => 'Daily conditioner quoidem marca reuzel',
                'price' =>'12',
                'subcategory_id' => '3',
                'brand_id' => '2',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Daily Shampoo 350 ml REUZEL',
                'slug' => Str::slug('Daily Shampoo 350 ml REUZEL'),
                'description' => 'Daily shampoo shampooing quotidien marca reuzel',
                'price' =>'12',
                'subcategory_id' => '2',
                'brand_id' => '10',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Effaclar Gel Limpiador Micro-Exfoliante 200 ml LA ROCHE POSAY',
                'slug' => Str::slug('Effaclar Gel Limpiador Micro-Exfoliante 200 ml LA ROCHE POSAY'),
                'description' => 'Gel lmpiador marca la roche posay',
                'price' =>'12',
                'subcategory_id' => '13',
                'brand_id' => '11',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'PACK Acné GOOD MOLECULES',
                'slug' => Str::slug('PACK Acné GOOD MOLECULES'),
                'description' => 'Pack el arte de amar marca good molecules',
                'price' =>'12',
                'subcategory_id' => '14',
                'brand_id' => '10',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'PACK Anti-arrugas',
                'slug' => Str::slug('PACK Anti-arrugas'),
                'description' => 'Pack el arte de amar anti arrugas',
                'price' =>'12',
                'subcategory_id' => '14',
                'brand_id' => '11',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'PACK Piel Seca GOOD MOLECULES',
                'slug' => Str::slug('Pack el arte de amar para piel seca good molecules'),
                'description' => 'Aceite de Vitamin E oil',
                'price' =>'12',
                'subcategory_id' => '14',
                'brand_id' => '2',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'POMADA Clay Matte REUZEL 4 Oz. Cabello Débil Y Delgado',
                'slug' => Str::slug('POMADA Clay Matte REUZEL 4 Oz. Cabello Débil Y Delgado'),
                'description' => 'Pomada clay matte marca reuzel',
                'price' =>'12',
                'subcategory_id' => '4',
                'brand_id' => '2',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Pomada Green Grease Reuzel 4 Oz. Base De Cera Y Aceite',
                'slug' => Str::slug('Pomada Green Grease Reuzel 4 Oz. Base De Cera Y Aceite'),
                'description' => 'Pomada green grease marca reuzel',
                'price' =>'12',
                'subcategory_id' => '4',
                'brand_id' => '2',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'POMADA Water Soluble Red 4 Oz. Soluble al agua',
                'slug' => Str::slug('POMADA Water Soluble Red 4 Oz. Soluble al agua'),
                'description' => 'Pomada water soluble color rodo marca reuzel',
                'price' =>'12',
                'subcategory_id' => '4',
                'brand_id' => '2',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Shave Cream 1 Oz. REUZEL',
                'slug' => Str::slug('Shave Cream 1 Oz. REUZEL'),
                'description' => 'Pomada shave cream marca reuzel',
                'price' =>'12',
                'subcategory_id' => '15',
                'brand_id' => '12',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Depilador Cejas Rostro Eléctrico Inalámbrico',
                'slug' => Str::slug('Depilador Cejas Rostro Eléctrico Inalámbrico'),
                'description' => 'Maquina para depilar cejas y rostro',
                'price' =>'12',
                'subcategory_id' => '16',
                'brand_id' => '12',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Depilador Corporal de Piernas',
                'slug' => Str::slug('Depilador Corporal de Piernas'),
                'description' => 'Maquina de depilar para piernas',
                'price' =>'12',
                'subcategory_id' => '16',
                'brand_id' => '12',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Depilador Corporal YES para Vellos de RostroPiernasBrazos',
                'slug' => Str::slug('Depilador Corporal YES para Vellos de RostroPiernasBrazos'),
                'description' => 'Maquina de depilar para vellos del rostro piernas y brazos',
                'price' =>'12',
                'subcategory_id' => '16',
                'brand_id' => '12',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Depilador Facial Eléctrico Inalámbrico',
                'slug' => Str::slug('Aceite de VITAMINA E'),
                'description' => 'Maquina de depilar para el rostro',
                'price' =>'12',
                'subcategory_id' => '16',
                'brand_id' => '12',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Depilador Multizona Femenino SM',
                'slug' => Str::slug('Aceite de VITAMINA E'),
                'description' => 'Maquina de depilar multizona para mujeres',
                'price' =>'12',
                'subcategory_id' => '16',
                'brand_id' => '13',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Depiladora PHILIPS BRE650',
                'slug' => Str::slug('Depiladora PHILIPS BRE650'),
                'description' => 'Maquina de depilar marca philips',
                'price' =>'12',
                'subcategory_id' => '16',
                'brand_id' => '14',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Máquina Depiladora Kemei KM-3518 2 en 1 - Eléctrica Recargable',
                'slug' => Str::slug('Máquina Depiladora Kemei KM-3518 2 en 1 - Eléctrica Recargable'),
                'description' => 'Maquina depiladora para rostro marca kernei',
                'price' =>'12',
                'subcategory_id' => '16',
                'brand_id' => '12',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Rasurador Depilador Sweet Sensitive Precisión Mujer 5 en 1',
                'slug' => Str::slug('Rasurador Depilador Sweet Sensitive Precisión Mujer 5 en 1'),
                'description' => 'Rasurador sweer para mujer',
                'price' =>'12',
                'subcategory_id' => '17',
                'brand_id' => '12',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Removedor Depilador Recargable De Vello Facial Cejas',
                'slug' => Str::slug('Removedor Depilador Recargable De Vello Facial Cejas'),
                'description' => 'Removedor depilador recargable de vello facial',
                'price' =>'12',
                'subcategory_id' => '16',
                'brand_id' => '12',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Removedor Depilador Recargable De Vello Facial',
                'slug' => Str::slug('Removedor Depilador Recargable De Vello Facial'),
                'description' => 'Removedor depilador para vello facial',
                'price' =>'12',
                'subcategory_id' => '16',
                'brand_id' => '4',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'aplicador de labiales desechables',
                'slug' => Str::slug('aplicador de labiales desechables'),
                'description' => 'Aplicador de labias de diferentes colores',
                'price' =>'12',
                'subcategory_id' => '18',
                'brand_id' => '15',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Bálsamo labial Atoderm Baume Lèvres BIODERMA',
                'slug' => Str::slug('Bálsamo labial Atoderm Baume Lèvres BIODERMA'),
                'description' => 'Balsamo labial marca bioderma',
                'price' =>'12',
                'subcategory_id' => '18',
                'brand_id' => '4',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Bálsamo Labial de miel',
                'slug' => Str::slug('Bálsamo Labial de miel'),
                'description' => 'Balsamo labial de miel para labios',
                'price' =>'12',
                'subcategory_id' => '18',
                'brand_id' => '16',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Labial Hua MULAN',
                'slug' => Str::slug('Labial Hua MULAN'),
                'description' => 'Lapiz labial Hua marca Mulan',
                'price' =>'12',
                'subcategory_id' => '18',
                'brand_id' => '16',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Labial líquido Strong Chi MULAN',
                'slug' => Str::slug('Labial líquido Strong Chi MULAN'),
                'description' => 'Lapiz labial strong marca ColourPop',
                'price' =>'12',
                'subcategory_id' => '18',
                'brand_id' => '5',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Labial What A Pucker',
                'slug' => Str::slug('Labial What A Pucker'),
                'description' => 'Lapiz labial what a pucker marca Rude',
                'price' =>'12',
                'subcategory_id' => '18',
                'brand_id' => '4',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'brocha para difuminar pelo natural tapered blending',
                'slug' => Str::slug('brocha para difuminar pelo natural tapered blending'),
                'description' => 'Brocha para difuminar los ojos blending',
                'price' =>'12',
                'subcategory_id' => '7',
                'brand_id' => '4',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'brocha premium para difuminar fluffy blending pelo natural',
                'slug' => Str::slug('brocha premium para difuminar fluffy blending pelo natural'),
                'description' => 'Brocha premium para difuminar fluffy blending',
                'price' =>'12',
                'subcategory_id' => '7',
                'brand_id' => '17',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'delineador en crema negro inglot',
                'slug' => Str::slug('delineador en crema negro inglot'),
                'description' => 'Delineador en crema de color negro marca Inglot',
                'price' =>'12',
                'subcategory_id' => '19',
                'brand_id' => '18',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Desinfectante de maquillaje en polvo',
                'slug' => Str::slug('desinfectante de maquillaje en polvo'),
                'description' => 'Desinfectante de maquillaje en polvo marca Cinema Secrets',
                'price' =>'12',
                'subcategory_id' => '25',
                'brand_id' => '4',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'lavadora para limpieza de esponjas y brochas',
                'slug' => Str::slug('lavadora para limpieza de esponjas y brochas'),
                'description' => 'Lavadora para limpieza de esponjas y brochas',
                'price' =>'12',
                'subcategory_id' => '25',
                'brand_id' => '18',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'limpiador de brochas cinema secrets',
                'slug' => Str::slug('limpiador de brochas cinema secrets'),
                'description' => 'Limpiador de brochas marca Cinema Secrets',
                'price' =>'12',
                'subcategory_id' => '25',
                'brand_id' => '19',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'pack de 5 pestañas sintéticas',
                'slug' => Str::slug('pack de 5 pestañas sintéticas'),
                'description' => 'Pack de pestañas sinteticas marca Holy Blum',
                'price' =>'12',
                'subcategory_id' => '14',
                'brand_id' => '16',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'paleta de sombras strawberry shake colourpop',
                'slug' => Str::slug('paleta de sombras strawberry shake colourpop'),
                'description' => 'Paleta de sombras strawberry shaker marca Colourpop',
                'price' =>'12',
                'subcategory_id' => '21',
                'brand_id' => '20',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'plumon delineador bissu',
                'slug' => Str::slug('plumon delineador bissu'),
                'description' => 'Plumon delineador de ojos marca Bissu',
                'price' =>'12',
                'subcategory_id' => '22',
                'brand_id' => '21',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Calvin Klein Shock For Women 100 ML EDT',
                'slug' => Str::slug('Calvin Klein Shock For Women 100 ML EDT'),
                'description' => 'Perfume Calvin Klein Shock para hombres',
                'price' =>'12',
                'subcategory_id' => '27',
                'brand_id' => '22',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Carolina Herrera Chic Men 60 ML EDT',
                'slug' => Str::slug('Carolina Herrera Chic Men 60 ML EDT'),
                'description' => 'Perfume Carolina Herrera Chic Men',
                'price' =>'12',
                'subcategory_id' => '27',
                'brand_id' => '22',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Carolina Herrera CHT Privé Mujer 30 ML EDP',
                'slug' => Str::slug('Carolina Herrera CHT Privé Mujer 30 ML EDP'),
                'description' => 'Perfume Carolina Herrera CHT Privé para mujer',
                'price' =>'12',
                'subcategory_id' => '27',
                'brand_id' => '23',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Paco Rabanne Pour Homme 200 ML EDT',
                'slug' => Str::slug('Paco Rabanne Pour Homme 200 ML EDT'),
                'description' => 'Perfume Paco Rababbe Pour Homme',
                'price' =>'12',
                'subcategory_id' => '27',
                'brand_id' => '24',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Set Clinique Hidratante Moisture Surge 100H 30 ML',
                'slug' => Str::slug('Set Clinique Hidratante Moisture Surge 100H 30 ML'),
                'description' => 'Set con perfume para mujer Clinique Hidratante',
                'price' =>'12',
                'subcategory_id' => '27',
                'brand_id' => '25',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Set DKNY Golden Delicious Mujer 50 ML EDP + Cartera',
                'slug' => Str::slug('Set DKNY Golden Delicious Mujer 50 ML EDP + Cartera'),
                'description' => 'Set Dkny Golden delicius para mujer mas cartera de regalo',
                'price' =>'12',
                'subcategory_id' => '27',
                'brand_id' => '25',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Set DKNY Golden Delicius 50 ML EDP + DKNY Stories 3 ML EDP + Cartera',
                'slug' => Str::slug('Set DKNY Golden Delicius 50 ML EDP + DKNY Stories 3 ML EDP + Cartera'),
                'description' => 'Set Dkny Golden Delicius 50ml EDP mas cartera de regalo',
                'price' =>'12',
                'subcategory_id' => '27',
                'brand_id' => '25',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Set DKNY Stories EDT 100 ml + DKNY Stories marker 3 ml + cartera DKNY',
                'slug' => Str::slug('Set DKNY Stories EDT 100 ml + DKNY Stories marker 3 ml + cartera DKNY'),
                'description' => 'Set Dkny stories EDT 100ml mas marker 3ml',
                'price' =>'12',
                'subcategory_id' => '27',
                'brand_id' => '26',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Set Hugo Boss Man 200 ML EDT + Termo de Acero Hugo',
                'slug' => Str::slug('Set Hugo Boss Man 200 ML EDT + Termo de Acero Hugo'),
                'description' => 'Perfume set Hugo Boss Man 200ml mas termo de acero',
                'price' =>'12',
                'subcategory_id' => '27',
                'brand_id' => '27',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Set Tommy Men 30 ML EDT+ Neceser Tommy Hilfiger',
                'slug' => Str::slug('Set Tommy Men 30 ML EDT+ Neceser Tommy Hilfiger'),
                'description' => 'Perfume con set tommy para hombres mas neceser tommy',
                'price' =>'12',
                'subcategory_id' => '27',
                'brand_id' => '27',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Tommy Men 200 ML EDT',
                'slug' => Str::slug('Tommy Men 200 ML EDT'),
                'description' => 'Perfume Tommy 200ml para hombres',
                'price' =>'12',
                'subcategory_id' => '27',
                'brand_id' => '10',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Effaclar Gel Limpiador',
                'slug' => Str::slug('Effaclar Gel Limpiador Micro-Exfoliante 200 ml LA ROCHE POSAY'),
                'description' => 'Gel limpiador micro exfoliante para piel marca La Roche',
                'price' =>'14.99',
                'subcategory_id' => '13',
                'brand_id' => '11',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'PACK Acné GOOD MOLECULES',
                'slug' => Str::slug(
                'PACK Acné GOOD MOLECULES'),
                'description' => 'Pack para la acné marca good molecules',
                'price' =>'14.99',
                'subcategory_id' => '14',
                'brand_id' => '10',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'PACK Anti-arrugas',
                'slug' => Str::slug('PACK Anti-arrugas'),
                'description' =>
                'Pack anti arrugas marca good molecules',
                'price' =>'12',
                'subcategory_id' => '14',
                'brand_id' => '28',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'PACK Hidratación Intensa CERAVE',
                'slug' => Str::slug('Pack para hidratar la piel marca Cerave'),
                'description' => 'Pack para hidratar la piel marca Cerave',
                'price' =>'24.99',
                'subcategory_id' => '14',
                'brand_id' => '15',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'PACK Piel Grasa BIODERMA',
                'slug' => Str::slug(
                'PACK Piel Grasa BIODERMA'),
                'description' => 'Pack para piel grasosa marca Bioderma',
                'price' =>'15.99',
                'subcategory_id' => '14',
                'brand_id' => '10',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'PACK Piel Luminosa',
                'slug' => Str::slug('PACK Piel Luminosa'),
                'description' =>
                'Pack para piel luminosa marca La Roche',
                'price' =>'20.99',
                'subcategory_id' => '14',
                'brand_id' => '28',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'PACK Piel Mixta y Grasa CERAVE',
                'slug' => Str::slug(
                'PACK Piel Mixta y Grasa CERAVE'),
                'description' => 'Pack para piel mixta y grasosa marca Cerave',
                'price' =>'12',
                'subcategory_id' => '14',
                'brand_id' => '15',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'PACK Piel Seca BIODERMA',
                'slug' => Str::slug(
                'PACK Piel Seca BIODERMA'),
                'description' =>
                'Pack para piel seca marca Bioderma',
                'price' =>'27.99',
                'subcategory_id' => '14',
                'brand_id' => '28',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'PACK Piel Seca CERAVE',
                'slug' => Str::slug('PACK Piel Seca CERAVE'),
                'description' => 'Pack para piel seca marca Cerave',
                'price' =>'12',
                'subcategory_id' => '14',
                'brand_id' => '11',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'PACK Piel Seca GOOD MOLECULES',
                'slug' => Str::slug('PACK Piel Seca GOOD MOLECULES'),
                'description' => 'Pack para piel seca marca Good Molecules',
                'price' =>'25.99',
                'subcategory_id' => '14',
                'brand_id' => '15',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'PACK Piel Sensible BIODERMA',
                'slug' => Str::slug('Aceite de VITAMINA E'),
                'description' => 'Aceite de Vitamin E oil',
                'price' =>'16.99',
                'subcategory_id' => '14',
                'brand_id' => '28',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'PACK SA Anti-rugosidades CeraVE',
                'slug' => Str::slug('PACK SA Anti-rugosidades CeraVE'),
                'description' => 'Pack anti arrugas marca Cerave',
                'price' =>'12',
                'subcategory_id' => '14',
                'brand_id' => '18',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Champú Limpiador de brochas y esponjas CINEMA SECRETS',
                'slug' => Str::slug('Champú Limpiador de brochas y esponjas CINEMA SECRETS'),
                'description' => 'Champu limpiador de broch',
                'price' =>'30',
                'subcategory_id' => '24',
                'brand_id' => '29',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Correctores HD Lifting ELF',
                'slug' => Str::slug('Correctores HD Lifting ELF'),
                'description' => 'Corrector HD marca lifting ELF',
                'price' =>'12',
                'subcategory_id' => '24',
                'brand_id' => '18',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Desinfectante de maquillaje en POLVO',
                'slug' => Str::slug('Desinfectante de maquillaje en POLVO'),
                'description' => 'Desinfectante de maquillaje en polvo marca Cinema Secrets',
                'price' =>'12',
                'subcategory_id' => '20',
                'brand_id' => '15',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Gel limpiador para pieles MIXTAS y GRASAS Moussant BIODERMA (200ml)',
                'slug' => Str::slug('Gel limpiador para pieles MIXTAS y GRASAS Moussant BIODERMA (200ml)'),
                'description' => 'Gel limpiador para pieles mixtas y grasosas marca Bioderma',
                'price' =>'12',
                'subcategory_id' => '20',
                'brand_id' => '15',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Gel limpiador para pieles SENSIBLES Moussant BIODERMA (200ml)',
                'slug' => Str::slug('Gel limpiador para pieles SENSIBLES Moussant BIODERMA (200ml)'),
                'description' => 'Gel limpiador para piel sensible marca Bioderma',
                'price' =>'39.99',
                'subcategory_id' => '20',
                'brand_id' => '4',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Limpiador de brochas de Silicon',
                'slug' => Str::slug('Limpiador de brochas de Silicon'),
                'description' => 'Limpiador de brochas morada de silicon',
                'price' =>'19.99',
                'subcategory_id' => '20',
                'brand_id' => '19',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Paleta mezcladora con espátula de ACERO INOXIDABLE',
                'slug' => Str::slug('Paleta mezcladora con espátula de ACERO INOXIDABLE'),
                'description' => 'Paleta mezcladora con espatula de acero',
                'price' =>'12',
                'subcategory_id' => '20',
                'brand_id' => '15',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Protector Solar en Spray Photoderm MAX SPF 50+ BIODERMA (150 ML)',
                'slug' => Str::slug('Protector Solar en Spray Photoderm MAX SPF 50+ BIODERMA (150 ML)'),
                'description' => 'Protector solar en spray 150ml marca Bioderma',
                'price' =>'12',
                'subcategory_id' => '26',
                'brand_id' => '15',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Protector Solar Photoderm M SPF 50+ BIODERMA (40 ML)',
                'slug' => Str::slug('Protector Solar Photoderm M SPF 50+ BIODERMA (40 ML)'),
                'description' => 'Protector solar photodem M 40ml marca Bioderma',
                'price' =>'18',
                'subcategory_id' => '26',
                'brand_id' => '15',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Protector Solar SPOT-AGE SPF 50+ BIODERMA (40 ML)',
                'slug' => Str::slug('Protector Solar SPOT-AGE SPF 50+ BIODERMA (40 ML)'),
                'description' =>'Protector solar 50+ 40ml marca Bioderma',
                'price' =>'12',
                'subcategory_id' => '26',
                'brand_id' => '15',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Sensibio LIGHT BIODERMA (40ml) Piel Normal a Mixta',
                'slug' => Str::slug('Sensibio LIGHT BIODERMA (40ml) Piel Normal a Mixta'),
                'description' => 'Protector solar sensibio light marca Bioderma',
                'price' =>'16',
                'subcategory_id' => '26',
                'brand_id' => '15',
                'quantity' => '10',
                'status' => '2'
            ],
            [
                'name' => 'Sensibio RICH BIODERMA (40ml) Pieles secas y muy secas',
                'slug' => Str::slug('Sensibio RICH BIODERMA (40ml) Pieles secas y muy secas'),
                'description' => 'Protector solar sensibio rich 40ml marca Bioderma',
                'price' =>'14',
                'subcategory_id' => '26',
                'brand_id' => '15',
                'quantity' => '10',
                'status' => '2'
            ],
        ];

        foreach($productos as $product)
        {
            Product::create($product);
        }
    }
}
