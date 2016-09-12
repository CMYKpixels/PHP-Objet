<?php

    use Carbon\Carbon;
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Support\Facades\Schema;

    class Comments extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create(
                'comments', function($newtable) {
                $newtable->increments('id');
                $newtable->integer('painting_id')->length(10)->unsigned();
                $newtable->integer('user_id');
                $newtable->text('comment');
                $newtable->date('created')->default(Carbon::now());
                $newtable->timestamps();
                $newtable->engine = 'InnoDB';
            }
            );

            Schema::table(
                'comments', function($table) {
                $table->foreign('painting_id')->references('id')->on('paintings')->onDelete('cascade');
            }
            );

        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::drop('comments');
        }
    }
