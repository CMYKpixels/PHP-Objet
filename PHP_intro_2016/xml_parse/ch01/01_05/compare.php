<?php
// load XML document
$file = '../../xml/courses2.xml';
$courses = simplexml_load_file($file);

foreach ($courses as $course) {
    echo $course->title . '<br>';
    echo $course->author . '<br>';
    echo $course['url'] . '<br>';
    echo '<hr>';
}
