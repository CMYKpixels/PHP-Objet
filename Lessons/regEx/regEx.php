<?php
    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 30/06/2016
     * Time: 09:47
     */
//Les regEx peuvent être présentées entre /PATTERN/ ou #PATTERN#
    if (preg_match("#Vladimir#", "Vladimir Kramnik")) {
        echo 'trouvé tag avec []<br><hr>';
    } else {
        echo 'Ne trouve pas le tag avec []<br><hr>';
    }

    //Le"." fait office de Joker
    if (preg_match("#Vladim.r#", "Vladimir Kramnik")) {
        echo 'trouvé tag avec [.]<br><hr>';
    } else {
        echo 'Ne trouve pas le tag avec [.]<br><hr>';
    }

    //L' "*" match 0 ou > [nb de caractères]
    if (preg_match("/<.*>/", "<h1>This is a Title</h1>")):
        echo 'trouvé tag avec [*]<br><hr>';
    else:
        echo 'Ne trouve pas le tag avec [*]<br><hr>';
    endif;

    //"+" au moins 1 ou > [nb de caractères]
    if (preg_match("/<.+>/", "<>This is a Title")):
        echo 'trouvé avec [+]<br><hr>';
    else:
        echo 'Ne trouve pas le tag avec [+]<br><hr>';
    endif;

    //"?" au moins 1 ou > [nb de caractères]
    if (preg_match("/a?/", "<>This is aaa Title")):
        echo 'trouvé avec [?]<br><hr>';
    else:
        echo 'Ne trouve pas le tag avec [?]<br><hr>';
    endif;

    //"\." recherche le [.] (echappement de caractère)
    if (preg_match("/8\.1/", "Windows 10.1")):
        echo 'trouvé avec [\.]<br><hr>';
    else:
        echo 'Ne trouve pas le tag avec [\.]<br><hr>';
    endif;

    //"()" recherche un groupe tel quel
    if (preg_match("/Ho-(ho)+/", "1 000 000 000 of Ho-ho HO's")):
        echo 'trouvé avec [()]<br><hr>';
    else:
        echo 'Ne trouve pas le tag avec [()]<br><hr>';
    endif;

    //"|" Conditionnel
    if (preg_match("/chateau|gateau/", "Je préfère les gateaux")):
        echo 'trouvé avec [?]<br><hr>';
    else:
        echo 'Ne trouve pas le tag avec [?]<br><hr>';
    endif;

    //"^" Cherche l'espression commençant par...
    if (preg_match("/^Je/", "Je préfère les gateaux")):
        echo 'trouvé avec [^]<br><hr>';
    else:
        echo 'Ne trouve pas le tag avec [^]<br><hr>';
    endif;


    //"$" Cherche l'espression finissant par...
    if (preg_match("/je$/", "Je préfère les gateaux")):
        echo 'trouvé avec [$]<br><hr>';
    else:
        echo 'Ne trouve pas le tag avec [$]<br><hr>';
    endif;

    //"[]" recherche la Classe a ou e
    if (preg_match("/ch[aeiou]let/", "Chalet")):
        echo 'trouvé avec [[]]<br><hr>';
    else:
        echo 'Ne trouve pas le tag avec [[]]<br><hr>';
    endif;

    //tests
    if (preg_match("/[^t]{4}/", "Je préfère les gateaux dans un chateau")):
        echo 'trouvé avec [$]<br><hr>';//Recherche 4T à la suite
    else:
        echo 'Ne trouve pas le tag avec [$]<br><hr>';
    endif;

    if (preg_match("/[0-9]/", "Je préfère les gateaux dans un chateau")):
        echo 'trouvé avec []<br><hr>';//Recherche de [Range]
    else:
        echo 'Ne trouve pas le tag avec []<br><hr>';
    endif;