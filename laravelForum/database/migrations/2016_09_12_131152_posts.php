<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    use Carbon\Carbon;

    class Posts extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */

        public function up()
        {
            Schema::create(
                'posts', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned();
                $table->string('title');
                $table->text('content');
                $table->date('created')->default(Carbon::now());
                $table->timestamps();
                $table->engine = 'InnoDB';
            }
            );

            Schema::table(
                'posts', function(Blueprint $table) {
                $table->foreign('user_id')
                      ->references('id')
                      ->on('users')
                      ->onDelete('cascade');
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
            Schema::drop('posts');
        }
    }

