<?php

$conn = new mysqli('localhost', 'root', '', 'world');
if ($conn->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $conn->connect_errno . ") " . $conn->connect_error;
}

// get query
$query = "SELECT * FROM Country";
$res = $conn->query($query);


while($country = $res->fetch_assoc()){
    $countries [] = $country;
}


var_dump($countries);
die();

