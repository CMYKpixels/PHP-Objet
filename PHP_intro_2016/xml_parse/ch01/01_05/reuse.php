<?php
// load XML document
$file = '../../xml/courses2.xml';
$courses = simplexml_load_file($file);

// initialize a variable to store the author's name
$previous = '';
foreach ($courses as $course) {
    echo $course->title . '<br>';
    // check the author's name against the previous value
    if ($course->author == $previous) {
        echo 'Another great course by ';
    }
    echo $course->author . '<br>';
    echo $course['url'] . '<br>';
    echo '<hr>';
    // store the current author's name
    // to compare with the next one
    $previous = $course->author;
}
