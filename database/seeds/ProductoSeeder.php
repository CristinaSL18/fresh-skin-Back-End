<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [

            [
            'product' => 'Exfoliante de fresa',
            'price' => '349',
            'description' => 'Un limpiador facial exfoliante suave en un tamaño de 200 ml
            que elimina las impurezas y el aceite, sin resecarlo, mientras refina el aspecto de los poros para una piel suave y tersa.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],

            [
                'product' => 'Serum de Rosa',
                'price' => '449',
                'description' => 'Un suero ligero y de rápida absorción que proporciona una humedad profunda de 24 horas para una piel
                  flexible y húmeda',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                 'product' => 'Crema de té negro',
                 'price' => '299',
                 'description' => 'Una crema para la cara y el cuello visiblemente reafirmante que hidrata y fortalece
                  la piel para una apariencia más firme y alzada con contornos más definidos.',
                 'created_at' => Carbon::now(),
                 'updated_at' => Carbon::now(),
            ],

            [
                'product' => 'Gel de rosa',
                'price' => '249',
                'description' => 'Una crema hidratante diaria sin peso para todo tipo de piel (¡incluso grasa!)
             Que proporciona hidratación las 24 horas con un acabado mate fácil de maquillar.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'product' => 'Gel de ojos de loto',
                'price' => '299',
                'description' => 'Un gel para los ojos ligero y diario que reduce la apariencia de hinchazón, ojeras y fatiga mientras hidrata
                 y revitaliza',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'product' => 'Tónico de arcilla',
                'price' => '199',
                'description' => 'Un tóner de control de aceite a base de arcilla que minimiza la apariencia de los poros mientras matifica y
                 suaviza la piel.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'product' => 'Suero Antioxidante',
                'price' => '449',
                'description' => 'Un suero de jugo con más de 480,0000 microburbujas ricas en nutrientes que brinda una dosis esencial de
                 nutrición para la piel para una apariencia energizada y saludable',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'product' => 'Crema de Lotus',
                'price' => '449',
                'description' => 'Una crema de recuperación nocturna de vanguardia impulsada por el antioxidante Super Lotus que ayuda a
                 fortalecer la barrera cutánea mientras combate la opacidad y la deshidratación.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]

            ]
        );
    }
}
