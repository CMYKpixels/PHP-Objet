<?php
$firstname    = "Douglas";
$lastname     = "Adams";
$author       = $firstname.' '.$lastname;
$title        = "The Hitchickers Guide to the Galaxy";
$android      = "Marvin";
$brain_size   = "the size of a planet";


$escaped = "In \"$title\" by $author,"
    ."$android the \"paranoid android";

echo $escaped;

$fullname     = '$firstname $lastname';
$book         = '$title by $author';

//echo $fullname .'<br>';
//echo $ book;

$newlines     = '<br>';
$message     .= 'Name: $fullname $newlines';
$message     .= 'Book: $book $newlines';
$message     .= 'Answer: $answer';

echo $message
    ?>