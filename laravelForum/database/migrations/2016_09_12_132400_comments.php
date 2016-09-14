<?php

    use Carbon\Carbon;
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;

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
                        'comments', function(Blueprint $newtable)
                        {
                            $newtable->increments('id');
                            $newtable->integer('post_id')->unsigned();
                            $newtable->integer('user_id')->unsigned();
                            $newtable->string('title');
                            $newtable->text('content');
                            $newtable->date('created')->default(Carbon::now());
                            $newtable->timestamps();
                            $newtable->engine = 'InnoDB';
                        }
                    );

                    Schema::table(
                        'comments', function(Blueprint $newtable)
                        {
                            $newtable->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                            $newtable->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
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
