<?php

class customException extends Exception {
    public function maMethodeErreur() {
        //error message
        $errorMsg = 'Ce message erreur est sur mesure<br/>';
        $errorMsg .= 'Erreur ligne '.$this->getLine().' in '.$this->getFile()
            .': <b>'.$this->getMessage().'</b> est pas une addresse E-Mail valide';
        return $errorMsg;
    }
}

$email = "someone@example...com";

try {
    //check if the email is valid
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        //throw exception if email is not valid
        throw new customException($email);
    }
}

catch (customException $e) {
    //display custom message
    echo $e->maMethodeErreur();
}

echo "<br/>";
echo "END";