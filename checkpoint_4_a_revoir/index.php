<?php
/**
 * L'objectif de ce checkpoint numero 4 est de travailler avec un routeur et transformer la totalité
 * des fichiers fonctions qu'on avait dans model en class et les implémenter. Aussi on peut voir l'utilisation
 * de classe abstraites pour certaines fonctionnalités.
 * Si vous avez commencer avec un nouveau projet faire quelque chose d'équivalent.
 * Sachez que si vous avez fini avec des paquets de code dans votre fichier index.php {alias le contrôlleur}
 * ça veut dire que vous n'avez pas forcément rempli votre mission
 */
/* Ceci est l'autoload de vendor en l'occurence flight, moi j'ai cet autoload car je l'ai installé avec
 * Composer
*/
require 'vendor/autoload.php';
/* notre propre autoloader -> regardez le j'ai fais des modifs dessus */
require 'autoloader.php';
/* J'ai fini par mettre toutes les session dans une classe SessionManager */
SessionManager::SessionStart();
/* Notez que flight pour les vues automatiquement regarde le dossier "views"
    Par défaut le dossier "templates" ne marchera pas
 */
/* Flight::render();
 * Le premier paramètre pointe vers le fichier - vous n'avez pas besoin de mettre .php
 * Le deuxième est un array qui va recracher les variables DANS le template en question
 * -> par exemple ici dans header.php vous pourrez utiliser <?=$heading?> et vous aurez 'Hello'
 * Le troisième paramètre est la création d'un variable qui pourra être réutilisée dans un autre template
*/
Flight::render('header', array('heading' => 'Hello'), 'header');
Flight::render('footer', array('test' => 'World'), 'footer');

/*
 * Comme Flight ne permet pas de générer des routes avec des méthodes depuis nos templates
 * je suis obligé de contourner le problème avec ce redirect pour router d'office a /login
 */
Flight::route('/',function(){
    Flight::redirect('/login');
});

/* LOGIN */
Flight::route('/login', function(){
    //on retrouve nos session contôlleur dans les vues
    SessionManager::sessionControlOffline();
    Flight::render('login', array());
});

/* IMPORTANT: dans ce routeur on inclus les services
 * Contrairement au système précédent où on les dissociait
 */
Flight::route('POST /serviceLogin',function(){
    include_once('services/serviceLogin.php');
});

/* SIGNUP */
Flight::route('/signup',function(){
    SessionManager::sessionControlOffline();
    Flight::render('signup', array());
});

Flight::route('POST /serviceSignup',function(){
    include_once('services/serviceSignup.php');
});

/* HOME */
Flight::route('/accueil',function(){
    SessionManager::sessionControlOnline();


    $dbm = new bddManager();
    $posts = $dbm->getAllPosts();
    Flight::render('accueil', array('posts'=>$posts));


});

Flight::route('/newPost',function(){
    SessionManager::sessionControlOnline();
    Flight::render('newPost', array());
});

Flight::route('/serviceNewPost',function(){
   include_once('services/serviceNewPost.php');
});

/*
 * Ici nous avons @id qui nous permettra d'éviter de faire un $_GET['id']
 * comme on a fait dans les version précédentes. C'est pour ça que c'est intéressant de bien travailler
 * sur un router. on passe l'argument dans la fonction call back "function($id)"
 * et ainsi on peut réutiliser $id un peu plus bas. Bien que flight nous simplifie la vie j'ai constaté
 * quelques bugs pour les routes.. vous vous en rendrez compte si vous naviguez dans une route qui
 * a un paramètre et vous vous déloggez par exemple.
 * */
Flight::route('/viewPost/@id',function($id){
    SessionManager::sessionControlOnline();
    $dbm = new bddManager();
    $post = $dbm->getPostById($id);
    $comments = $dbm->getAllCommentsByPostId($id);
    Flight::render('viewPost', array('post'=>$post,'comments'=>$comments));
});

Flight::route('POST /serviceComment',function(){
    include_once('services/serviceComment.php');
});

Flight::route('/deconnexion',function(){
    SessionManager::sessionDestroy();
    Flight::redirect('/login');
});

Flight::start();