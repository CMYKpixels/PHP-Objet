<?php
/**
 * Created by PhpStorm.
 * User: CMYKpixels
 * Date: 22/06/2016
 * Time: 09:18
 */
$title = "Matrix";
$character = "Neo";
$ability = "Kung-Fu";

$heredoc = <<< EOT
    "$title" est un film dont le personnage principal est "$character" joué par Keanu Reaves. il est passé maître dans
    l'art du "$ability".
EOT;

//le texte compris dans la variable $heredoc peut contenir accent "" et '' sans avoir besoin d'echapper les caractères.