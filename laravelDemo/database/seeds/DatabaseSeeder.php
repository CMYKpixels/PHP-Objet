<?php

use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //désactive le check des contraintes clées
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // $this->call(UsersTableSeeder::class);
        $this->call('PaintingsTableSeeder');
        $this->call('CommentsTableSeeder');

        //réactive le check des contraintes clées
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

    }
}
