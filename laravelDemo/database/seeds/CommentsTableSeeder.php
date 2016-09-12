<?php
    use App\Comment;
    use Illuminate\Database\Seeder;

    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 09/09/2016
     * Time: 11:47
     */
    class CommentsTableSeeder extends Seeder
    {
        public function run()
        {
            $faker = Faker\Factory::create();
            Comment::truncate();

            for($i = 0; $i < 20; $i++) {
                $comment = Comment::create(
                    array(
                        'painting_id' => $faker->biasedNumberBetween($min = 1, $max = 10),
                        'user_id'     => 1,
                        'comment'     => $faker->realText(100)
                    )
                );
            }
        }
    }