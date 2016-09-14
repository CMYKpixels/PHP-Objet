<?php
    use App\Post;
    use Illuminate\Database\Seeder;

    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 13/09/2016
     * Time: 14:10
     */
    class PostTableSeeder extends Seeder
        {
            public function run()
                {
                    $faker = Faker\Factory::create();
                    Post::truncate();

                    for($i = 0; $i < 10; $i++)
                        {
                            $post = Post::create(
                                array(
                                    'title' => $faker->realText(rand(20, 40)),
                                    'content' => $faker->realText(100),
                                    'user_id'=>1
                                )
                            );
                        }
                }
        }