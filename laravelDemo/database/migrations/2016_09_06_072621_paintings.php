<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;
    use Illuminate\Support\Facades\Schema;


    class Paintings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paintings', function($table)
        {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->date('created')->default(carbon::now());
            $table->timestamps();
            $table->engine = "InnoDB";
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('paintings');
    }
}
