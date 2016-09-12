<?php

$isError = false;
$missingFields = array();


$userId = isset($_POST['commentator_id']) ? (int) $_POST['commentator_id'] : '';
$postId = isset($_POST['subjet_id']) ? (int) $_POST['subjet_id'] : '';
$comment = isset($_POST['comment']) ? strip_tags($_POST['comment']) : '';

SessionManager::setSessionComment($comment);

/**
 * userId et postId doivent être valide sinon on détruit la session et on balance le user
 * dehors.
 */
if(empty($userId) ) {
    SessionManager::kickOut();
}elseif($userId!==SessionManager::getMyId()){
    SessionManager::kickOut();
}
if(empty($postId) ) {
    SessionManager::kickOut();
}

if(empty($comment) ) {
    $isError = true;
    $missingFields[] = 'Le commentaire est vide';
}else{
    if(strlen($comment)<30){ // On veut que le sujet fasse au moins 30 caractères
        $isError = true;
        $missingFields[] = 'Le commentaire doit avoir au moins 30 caractères';
    }
}

if( $isError==true ) {
    $stringError="";
    if( $isError ) {
        $stringError .= "Erreurs sur les champs suivants : <br />";
        foreach( $missingFields as $fieldName ) {
            $stringError .= $fieldName . "<br />";
        }
        SessionManager::setErrorsForm($stringError);
        Flight::redirect("viewPost/$postId");
    }
}else{
    $dbm = new bddManager();
    $commentObj = new Comment(array(
        '_commentator_id'=>$userId,
        '_post_id' =>$postId,
        '_comment'=>$comment
    ));
    $res = $dbm->setNewComment($commentObj);
    SessionManager::unsetFormFields(); //sessions
    if($res==true){
        SessionManager::setSuccessForm('Votre commentaire a bien été posté');
        Flight::redirect("viewPost/$postId");
    }
}
