<!-- * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 05/07/2016
     * Time: 10:58-->
<?php
    function getConnection ()
    {
        $connection = new PDO("mysql:host=localhost;dbname=students;charset=UTF8", 'root', 'root');
        $connection->setAttibute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);

        return $connection;
    }

    ;

    function getStudents ()
    {
        $students = $connection->prepare('SELECT * FROM students');
        $students->execute(array());
        $result = $students->fetchAll(PDO::FETCH_ASSOC);
        var_dump($result);
    }

    ;

    function setNewStudent ($prenom, $nom, $email, $age, $langue)
    {
        $prenom = $_POST['prenom'];
        $nom    = $_POST['prenom'];
        $age    = $_POST['prenom'];
        $email  = $_POST['prenom'];
        $langue = $_POST['prenom'];
    }


    $pdo->execute(array(
                      'nom'    => $nom,
                      'prenom' => $prenom,
                      'age'    => $age,
                      'email'  => $email,
                      'langue' => $langue,
                  ));
    return $pdo->rowCount();

    //$prenom = $_POST['prenom'];
    //$nom    = $_POST['nom'];
    //$age    = $_POST['age'];
    //$age    = $_POST['age'];