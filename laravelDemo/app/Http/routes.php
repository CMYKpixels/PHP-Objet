<?php
0
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


    use App\Painting;
    use Illuminate\Support\Facades\Input;
    use Illuminate\Support\Facades\Redirect;


    Route::get(
        '/', function() {
        return view('welcome');
    }
    );

//Création des routes
    Route::get(
        '/post', function() {
        return "quelque chose";
    }
    );

//Création des routes
    Route::get(
        '/random/{id}', function($id) {
        return "Route $id";
    }
    );

//Création des routes
    Route::get(
        'myTemplate', function() {
        $myVar = "Super Astronomical Velocity";

        return view("hello", array("maVariable" => $myVar));
    }
    );

    //Création des routes
    Route::get(
        '/where', function() {
//        return Redirect::route('rand',['id'=> 3]);
        //utiliser l'alias avec Redirect::route
        return Redirect::to('myTemplate');
        // Avec Redirect::to c'est le nom de la route
    }
    );

    Route::get(
        '/newRoute', array(
                       'as' => 'cherryPop',
                       function() {
                           return "Yamete kudasai";
                       },
                   )
    );

    Route::get(
        '/myRoute', function() {
        $superSonico = array(
            "il fait soleil",
            "je comprends rien",
            "ça va trop vite",
        );

        return view('sonico', array('superSonico' => $superSonico));
    }
    );

    Route::get(
        '/creation', function() {

//           $painting = new Painting();
//           $painting-> title='Joconde';
//           $painting-> description='La Joconde';
//           $painting-> author='Da VINCI';
//           $painting->save();

        $painting        = Painting::find(1);
        $painting->title = 'Robocop';
        $painting->save();
        $painting->delete();

        dd($painting->title);
        var_dump($painting);
        die();

        return "The painting has been saved";

    }
    );

    Route::get(
        '/form', function() {
        //form.blade.php
        return view('form');
    }
    );

    Route::post(
        '/newUserService', function() {
        $email = Input::get('email');
        echo 'Your email is '.$email;
        echo '<br>';
        echo "Enter Something to Post";
        die();
    }
    );

    Route::group(
//        ['middleware' => 'web'],
        ['middleware' => 'auth'],
        function() {
//            Route::auth();
            Route::get('/testController', 'PaintingsController@index');
        }
    );

    //Création des routes
//    Route::get(
//        '/where', function() {
//        return Redirect::route('cherryPop');
//    }
//    );

    //Création des routes
//    Route::get(
//'?' rend le paramètre ID facultatif
// mais il faut le renseigner vide en paramètre
//
//        '/random/{id?}/', function($id = "") {
//
//        return Redirect::route('cherryPop');
//    }
//    );

    //Création des routes
//    Route::get(
//        '/where', array(
//        'uses' => 'PaintingsController@serviceNewPainting',
//    )
//    );


    Route::get(
        '/random/{id}',
        array(
            'as' => 'rand',
            function($id) {
//                return "test $id";
                return view('random');
            })
    )-> where('id', '\d+');
//  )-> where('id', '[0-9]'); equivalent RegEx ci dessus


    Route::get('/where', array(
        "as"=>"where",
        'uses'=>'PaintingsController@where'
    ));

    Route::get('/modify', function(){
       //ORM
        $paintings= Painting::find(10);
//        dd($paintings);
        $paintings->delete();
        return 'deleted';
    });

    Route::get('/home', 'HomeController@index');
    Route::get('testController', 'PaintingsController@index');
    Route::get('/painting/create', 'PaintingsController@createView');

    Route::post(
        '/painting/create', array(
                              'uses' => 'PaintingsController@serviceNewPainting',
                              'as'   => 'newPaintingService'
                          )
    );

    Route::auth();
