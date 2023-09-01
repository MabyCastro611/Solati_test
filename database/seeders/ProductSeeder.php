<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product')->insert([
            [
                'name' => 'Arroz de coco',
                'description' => 'Delicioso arroz de coco, con un toque especial',
                'price' => 34000,
            ],
            [
                'name' => 'Dulce de coco',
                'description' => 'Delicioso dulce de coco, con un toque especial',
                'price' => 31000,
            ],
            [
                'name' => 'Aceite de coco',
                'description' => 'Espectacular aceite de coco, perfecto para darle brillo a tu cabello',
                'price' => 12000,
            ]
        ]);
    }
}
