<?php

    use Illuminate\Database\Seeder;

    class DatabaseSeeder extends Seeder
        {
        /**
         * Run the database seeds.
         *
         * @return void
         */
            public function run()
                {
//          désactive le check des contraintes clées
                    DB::statement('SET FOREIGN_KEY_CHECKS=0');

//         $this->call(UsersTableSeeder::class);
//         $this->call(PostTableSeeder::class);
         $this->call(CommentTableSeeder::class);

//              réactive le check des contraintes clées
                    DB::statement('SET FOREIGN_KEY_CHECKS=1');
                }
        }
