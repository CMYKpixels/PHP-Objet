<?php
    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 15/09/2016
     * Time: 14:40
     */
    use App\Comment;
    use Illuminate\Database\Seeder;


    class CommentTableSeeder extends Seeder
    {
        public function run()
        {
            $faker = Faker\Factory::create();
            Comment::truncate();

            for($i = 0; $i < 10; $i++)
            {
                $comment = Comment::create(
                    array(
                       'title'   => $faker->realText(rand(20, 40)),
                       'content' => $faker->realText(100),
                       'user_id' => 1,
                       'post_id'=>$faker->biasedNumberBetween(1,10),
                   ));
            }
        }
    }