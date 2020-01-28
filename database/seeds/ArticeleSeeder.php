<?php

use Illuminate\Database\Seeder;

class ArticeleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articeles')->insert([
            [   
                'gender' => 'men',
                'type' => 'trousers',
                'size' => 'L',
                'price' => 7000,
                'image' => 'trousers.jpeg',
            ],
            [
                'gender' => 'men',
                'type' => 't-shirt',
                'size' => 'S',
                'price' => 2000,
                'image' => 't-shirt_m.jpeg'
            ],
              [   
                'gender' => 'women',
                'type' => 't-shirt',
                'size' => 'M',
                'price' => 5000,
                'image' => 't-shirt_w.jpeg'
            ],
            [
                'gender' => 'women',
                'type' => 'skirt',
                'size' => 'L',
                'price' => 8000,
                'image' => 'skirt.jpeg'
            ]
        ]);
    }
}
