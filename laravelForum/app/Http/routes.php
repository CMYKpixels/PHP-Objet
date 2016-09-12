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

    //    use Illuminate\Support\Facades\Route;

    Route::get(
        '/', function()
        {
            return view('home');
        }
    );


//    Add new Post
    Route::post(
        '/post/{id}', function($id)
        {
            //
        }
    );


    Route::auth();

    Route::get('/home', 'HomeController@index');
