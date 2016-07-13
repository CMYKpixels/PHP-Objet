<?php
    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 29/06/2016
     * Time: 11:11
     */
//    var_dump($_FILES);
//    die();
    //////////////////////////////////////////////////////
    /*    $target_path = "uploads/";
        $target_path = $target_path.basename($_FILES['uploadFile']['name']);

        if (move_uploaded_file($_FILES['uploadFile']['tmp_name'], $target_path)) {
            echo "the file ".basename($_FILES['uploadFile']['name'])." has been uploaded";
        } else {
            echo "There was an error while uploading the file... Please do it again !";
        }
    */
    //////////////////////////////////////////////////////

    if (isset($_FILES['uploadFile']) AND $_FILES['uploadFile']['error'] == 0) {
        //test si le fichier n'est pas trop gros
        if ($_FILES['uploadFile']['size'] <= 1000000) {
            //test si l'extension est valide
            $infoFichier      = pathinfo($_FILES['uploadFile']['name']);
            $extension_upload = $infoFichier['extension'];
            $auth_ext         = array_key_exists('jpg', 'jpeg', 'gif', 'png');
            if (in_array($extension_upload, $auth_ext)) {
                //On peut valider le fichier et le stocker définitivement
                $newName = hash('sha1', $_FILES['uploadFile']['tmp_name'], 'uploads/' . basename($newName));
                echo "Transfert du fichier effectué !";
            }
        } else {
            $erreur = $_FILES['uploadFile']['error'];
            echo "Erreur lors du transfert de fichier...$erreur";
        }
    }  