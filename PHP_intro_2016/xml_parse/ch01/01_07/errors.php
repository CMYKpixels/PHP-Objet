<?php
// make sure display_errors is turned on
ini_set('display_errors', '1');

// load XML document
$file = '../../xml/courses4.xml';
$courses = simplexml_load_file($file);

echo 'Total courses: ' . $courses->count() . '<hr>';

foreach ($courses as $course) {
    echo $course->title . '<br>';
    echo $course['url'] . '<br>';
    foreach ($course->subjects->subject as $subject) {
        echo $subject . '<br>';
    }
    echo '<hr>';

}