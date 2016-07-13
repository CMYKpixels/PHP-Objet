<?php
session_start();
///////////////////////////////////////////////////////////////////////////////
/* Outils */
function pretty_print_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

function checkParams($array){
    foreach($array as $value){
        if(isset($_POST[$value])){
            if($_POST[$value]== ''){
                return false;
            }
        }else{ return false; }
    }
    return true;
}
///////////////////////////////////////////////////////////////////////////////
/* Database */
function getBdd(){
    return new mysqli('localhost', 'root', 'root', 'blog');
}
///////////////////////////////////////////////////////////////////////////////
/* Gestion des articles */
function countArticles(){
    $bdd = getBdd();
    $sql = "SELECT COUNT(*) FROM articles";
    $result = $bdd->query($sql);
    $count = $result->fetch_row()[0];
    return $count;
}
//Fonction de récupération de l'ensemble des articles de ma base
function getAllArticles($page){
    $page*=10;
    $bdd = getBdd(); //Récupération de la base de donnée (le return contient l'objet mysqli)
    $sql = "SELECT * FROM articles LIMIT ?, 10"; //Creation de la requête SQL
    $stmt = $bdd->prepare($sql);
    $stmt -> bind_param('i',$page);
    $stmt -> execute();
    $result = $stmt->get_result(); //Execution de la requête
    
    $allArticles = array(); //Declaration de mon tableau qui contiendra tous les articles
    
    if($result->num_rows > 0){ //Si le nombre de ligne reçu est > 0
        while ($article = $result->fetch_assoc()){ //récupération du tableau associatif correspondant a la prochaine ligne trouvée dans la base de donnée
            $allArticles[] = $article; //Ajout de l' article dans le tableau d'article
        }
    }
    
    return $allArticles; //La fonction retourne tout le tableau d'article
    
        /*Le tableau renvoyé est de cette forme :
        array(
            array(
                'id' => 1,
                'title' => 'Art 1',
                'content' => 'Art 1 Content',
                'author_id' => 3
            ),
            array(
                'id' => 2,
                'title' => 'Art 2',
                'content' => 'Art 2 Content',
                'author_id' => 11
            ),
            array(
                'id' => 3,
                'title' => 'Art 3',
                'content' => 'Art 3 Content',
                'author_id' => 5
            )
        )*/
    
}

//Récupération d'un article par son id dans la base
function getArticleById($id){
    $bdd = getBdd(); //Récupération de la base de donnée (le return contient l'objet mysqli)
    $sql = "SELECT * FROM articles WHERE id=?"; //Création de la requête SQL préparée
    $stmt = $bdd->prepare($sql); //Préparation de la requête
    $stmt->bind_param('i', $id); //Association des variables au ? de la requête : 'i' est le type(int) et $id la variable a assigner
    $stmt->execute(); //Execution de la requête
    $result = $stmt->get_result(); //Récupération du résultat de la requête
    
    if($result->num_rows > 0){ //Si il y a au moins 1 ligne trouvée
        $article = $result->fetch_assoc(); //On récupère le tableau associatif de la premiere ligne (logiquement il n'y a pas d'autre ligne, et on en a besoin que d'une seule
        return $article; //On renvoie l'article ainsi récupéré
        /*Le tableau renvoyé est de cette forme : 
        array(
                'id' => 3,
                'title' => 'Art 3',
                'content' => 'Art 3 Content',
                'author_id' => 5
            )
        */
    }
    else{
        return false; //AUcun résultat, il n'y a pas d'article à l'id demandé
    }
}

//Fonction d'insertion d'un article
function createArticle($title, $content, $author_id){
    $bdd=getBdd(); //Récupération de la base de donnée (le return contient l'objet mysqli)
    $sql="INSERT INTO articles VALUES (0, ?, ?, ?)"; //Création de la requête SQL préparée
    $stmt=$bdd->prepare($sql); //Préparation de la requête
    $stmt->bind_param('ssi',$title,$content,$author_id); /*Association des variables aux ? de la requête : 'ssi' sont les types string, string, integer, puis l'ordre des variables correspondent 
                                                           à l'ordre des ?     */
    $stmt->execute(); //Execution de la requête
    if($stmt->affected_rows > 0){ //Si il y a au moins 1 ligne affecté, c'est qu'on a réussi l'insertion
        return true; //L'insertion à été effectué avec succès
    } else {
        return false; //Erreur lors de l'insertion
    }
}

//Fonction de mise à jour d'un article
function updateArticle($title, $content,$id){
    $bdd=getBdd(); //Récupération de la base de donnée (le return contient l'objet mysqli)
    $sql="UPDATE articles SET title=?, content=? WHERE id=?"; //Création de la requête SQL préparée
    $stmt=$bdd->prepare($sql); //Préparation de la requête
    $stmt->bind_param('ssi',$title,$content,$id); /*Association des variables aux ? de la requête : 'ssi' sont les types string, string, integer, puis l'ordre des variables correspondent 
                                                           à l'ordre des ?     */
    $stmt->execute(); //Execution de la requête
    
    if($stmt->affected_rows > -1){ //Si il y a au moins 1 ligne affecté, c'est qu'on a réussi l'insertion
        return true; //La mise à jour à été effectuée avec succès
    } else {
        return false; //Erreur lors de la mise à jour
    }
}
function deleteArticle($id){
    $bdd=getBdd(); //Récupération de la base de donnée (le return contient l'objet mysqli)
    $sql="DELETE FROM articles WHERE id=?"; //Création de la requête SQL préparée
    $stmt=$bdd->prepare($sql); //Préparation de la requête
    $stmt->bind_param('i',$id); /*Association des variables aux ? de la requête : 'ssi' sont les types string, string, integer, puis l'ordre des variables correspondent 
                                                           à l'ordre des ?     */
    $stmt->execute(); //Execution de la requête
    
    if($stmt->affected_rows >-1){ //Si il y a au moins 1 ligne affecté, c'est qu'on a réussi l'insertion
        return true; //La mise à jour à été effectuée avec succès
    } else {
        return false; //Erreur lors de la mise à jour
    }
}
///////////////////////////////////////////////////////////////////////////////
/* Gestion des utilisateurs */
//fonction d'inscription
function saveUser($firstname,$lastname,$email,$password){
    $bdd=getBdd(); //Récupération de la base de donnée (le return contient l'objet mysqli)
    $sql="INSERT INTO users VALUES (0, ?, ?, ?, ?)"; //Création de la requête SQL préparée
    $stmt=$bdd->prepare($sql); //Préparation de la requête
    $password=md5($password); //Encodage MdP
    $stmt->bind_param('ssss',$firstname,$lastname,$email,$password); /*Association des variables aux ? de la requête : 'ssi' sont les types string, string, integer, puis l'ordre des variables correspondent 
                                                           à l'ordre des ?     */
    $stmt->execute(); //Execution de la requête
   
    if($stmt->affected_rows > 0){ //Si il y a au moins 1 ligne affecté, c'est qu'on a réussi l'insertion
        return true; //L'insertion à été effectué avec succès
    } else {
        return false; //Erreur lors de l'insertion
    }
}
///////////////////////////////////////////////////////////////////////////////
//Fonction de récupération d'un utilisateur par id -> se référer a getArticleById pour les commentaires
function getUserById($id){
    $bdd = getBdd(); 
    $sql = "SELECT * FROM users WHERE id=?";
    $stmt = $bdd->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows > 0){
        $user = $result->fetch_assoc();
        return $user;
         /*Le tableau renvoyé est de cette forme : 
        array(
                'id' => 3,
                'firstname' => 'Pierre',
                'lastname' => 'MAR',
                'email' => 'p.mar@b-now.com',
                'password' => 'cc3a0280e4fc1415930899896574e118'
            )
        */
    }
    else{
        return false;
    }
}

//fonction de connection !
function connect($email, $password){
    
    $bdd = getBdd(); 
    $sql = "SELECT * FROM users WHERE email=? AND password=?"; //Au final c'est la même chose que getUserById sauf que les conditions de la requêtes sont différentes !
    $stmt = $bdd->prepare($sql);
    $password = md5($password);
    $stmt->bind_param('ss', $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows >0){
        $user = $result->fetch_assoc();
        return $user;
    }
    else{
        return false;
    }
    
}
///////////////////////////////////////////////////////////////////////////////
/* Gestion des commentaires */
function countComments()
{
    $bdd = getBdd();
    $sql = "SELECT COUNT(*) FROM commentaires";
    $result = $bdd->query($sql);
    $count = $result->fetch_row()[0];
    return $count;
}
//Fonction de récupération de l'ensemble des commentaires de ma base
function getAllComments()
{
    $bdd = getBdd(); //Récupération de la base de donnée (le return contient l'objet mysqli)
    $sql = "SELECT * FROM commentaires"; //Creation de la requête SQL
    $stmt = $bdd->prepare($sql);
    $stmt -> bind_param('i',$page);
    $stmt -> execute();
    $result = $stmt->get_result(); //Execution de la requête

    $allComments = array(); //Declaration de mon tableau qui contiendra tous les articles

    if($result->num_rows > 0){ //Si le nombre de ligne reçu est > 0
        while ($comment = $result->fetch_assoc()){ //récupération du tableau associatif correspondant a la prochaine ligne trouvée dans la base de donnée
            $allComments[] = $comment; //Ajout du comment dans le tableau de comment
        }
    }
    return $allComments; //La fonction retourne tout le tableau d'article
}
    
//Récupération d'un commentaire par son id dans la base
function getCommentsByArticleId($id)
{
    $bdd = getBdd(); //Récupération de la base de donnée (le return contient l'objet mysqli)
    $sql = "SELECT * FROM commentaires WHERE article_id=?"; //Création de la requête SQL préparée
    $stmt = $bdd->prepare($sql); //Préparation de la requête
    $stmt->bind_param('i', $id); //Association des variables au ? de la requête : 'i' est le type(int) et $id la variable a assigner
    $stmt->execute(); //Execution de la requête
    
    $result = $stmt->get_result(); //Récupération du résultat de la requête
    
    $allComments = array(); //Declaration de mon tableau qui contiendra tous les commentaires

    if($result->num_rows > 0)
    { //Si le nombre de ligne reçu est > 0
        while ($comment = $result->fetch_assoc())
        { //récupération du tableau associatif correspondant a la prochaine ligne trouvée dans la base de donnée
            $allComments[] = $comment; //Ajout du comment dans le tableau de comment
        }
    }
    return $allComments; //La fonction retourne tout le tableau de commentaires
}
    
//Fonction d'insertion d'un commentaire
function createComment($author_id,$comment_content,$article_id)
{
    $bdd=getBdd(); //Récupération de la base de donnée (le return contient l'objet mysqli)
    $sql="INSERT INTO commentaires VALUES (0, ?, ?, ?)"; //Création de la requête SQL préparée
    $stmt=$bdd->prepare($sql); //Préparation de la requête
    $stmt->bind_param('isi',$author_id,$comment_content,$article_id); /*Association des variables aux ? de la requête : 'isi' sont les types integer, string, integer, puis l'ordre des variables correspondent à l'ordre des ?     */
    $stmt->execute(); //Execution de la requête
    if($stmt->affected_rows > 0)
    { //Si il y a au moins 1 ligne affecté, c'est qu'on a réussi l'insertion
        return true; //L'insertion à été effectué avec succès
    } else 
    {
        return false; //Erreur lors de l'insertion
    }
}
?>







