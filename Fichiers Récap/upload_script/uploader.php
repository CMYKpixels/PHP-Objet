<?php

/**
 * Array element Contents
 *  $_FILES['file']['name'] nom
 *  $_FILES['file']['type'] contenu
     * application/pdf      image/gif  multipart/form-data      text/xml
     * application/zip      image/jpeg text/css                 video/mpeg
     * audio/mpeg           image/png  text/html                video/mp4
     * audio/x-wav          image/tiff text/plain               video/quicktime
 *
 *  $_FILES['file']['size'] taille en bytes
 *  $_FILES['file']['tmp_name'] nom temporaire du fichier
 *  $_FILES['file']['error'] Code erreur s'il y en a
 */
/*$target_path = "uploads/";

//var_dump($_FILES);
//var_dump($_FILES['uploadedfile']['error']);

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']).
        " has been uploaded";
} else {
    echo "There was an error uploading the file, please try again!";
}*/

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['uploadedfile']) AND $_FILES['uploadedfile']['error'] == 0)
{
    // Testons si le fichier n'est pas trop gros
    if ($_FILES['uploadedfile']['size'] <= 1000000)
    {
        // Testons si l'extension est autorisée
        $infosfichier = pathinfo($_FILES['uploadedfile']['name']);

        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        if (in_array($extension_upload, $extensions_autorisees))
        {
            // On peut valider le fichier et le stocker définitivement
            $newName = hash('sha1',$_FILES['uploadedfile']['name']).'.'.$extension_upload;
            move_uploaded_file($_FILES['uploadedfile']['tmp_name'], 'uploads/' . basename($newName));
            echo "Transfert du fichier complété !";
        }
    }else{
        echo 'Erreur fichier trop gros';
    }
}else{
    $erreur = $_FILES['uploadedfile']['error'];
    echo "Le transfert du fichier a subis une erreur de code $erreur";
}
