<?php
// load XML document
$file = '../../xml/courses_ns3.xml';
$courses = simplexml_load_file($file);

$path = '//dc:subject[text()="MySQL"]/../..';

$mysql = $courses->xpath($path);
foreach ($mysql as $course) {
    echo $course->title . '<br>';
    echo $course->author . '<br>';
    $media = $course->attributes('media', true);
    echo $media['url'] . '<br>';
    $subjects = $course->subjects->children('dc', true);
    foreach ($subjects as $subject) {
        echo $subject . '<br>';
    }
    echo '<hr>';
}
