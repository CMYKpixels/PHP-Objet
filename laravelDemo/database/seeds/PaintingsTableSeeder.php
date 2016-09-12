<?php

/**
 * Created by PhpStorm.
 * User: CMYKpixels
 * Date: 06/09/2016
 * Time: 10:03
 */
use App\Painting;
use Illuminate\Database\Seeder;

class PaintingsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();
        Painting::truncate();

        for ($i = 0; $i < 10; $i++) {
            $painting = Painting::create(
                array(
                    'title' => $faker->realText(rand(20, 40)),
                    'description' => $faker->realText(100)
                )
            );
        }
    }
}