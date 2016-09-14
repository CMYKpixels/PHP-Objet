<?php

    /*
    |--------------------------------------------------------------------------
    | Application Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register all of the routes for an application.
    | It's a breeze. Simply tell Laravel the URIs it should respond to
    | and give it the controller to call when that URI is requested.
    |
    */

    use App\Post;
    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\Redirect;


    Route::get('/',
        function()
        {
            return view('welcome');
        });


    Route::get('/test',
        function()
        {
            return view('layouts.UI');
        });


//    show individual Post
    Route::get('/post/{id}',
               array(
                   'uses' => 'PostsController@viewPost',
                   'as'   => 'viewPost',
                   function($post_view) {
                       return Redirect::route('viewPost',['id'=>$post_view]);
                   },
               ));




//    show all Posts
    Route::get('/postList',
               array(
                   'uses' => 'PostsController@postList',
                   'as'   => 'postList',
               ));


    Route::auth();

    Route::get('/home', 'HomeController@index');
