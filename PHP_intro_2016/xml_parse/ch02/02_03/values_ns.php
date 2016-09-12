<?php
// load XML document
$file = '../../xml/courses_ns2.xml';
$courses = simplexml_load_file($file);


foreach ($courses as $course) {
    echo $course->title . '<br>';
    echo $course->author . '<br>';

    echo '<hr>';
}
