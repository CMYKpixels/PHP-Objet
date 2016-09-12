<?php
    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 02/09/2016
     * Time: 16:02
     */

    require_once __DIR__."/Symphony_translation/vendor/autoload.php";

    use Symfony\Component\Finder\Finder;
    use Symfony\Component\Finder\MessageSelector;


// Finder
    $finder = new Finder();
    $finder->in('../data/');


    use Symfony\Component\Translation\Translator;
    use Symfony\Component\Translation\Loader\ArrayLoader;

    $translator = new Translator('fr_FR');
    $translator->addLoader('array', new ArrayLoader());
    $translator->addResource('array', array(
        'Symfony is great!' => 'J\'aime Symfony!',
    ), 'fr_FR');

    var_dump($translator->trans('Symfony is great!'));

