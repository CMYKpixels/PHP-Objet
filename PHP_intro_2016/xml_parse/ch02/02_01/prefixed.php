<?php
// load XML document
$file = '../../xml/courses_ns2.xml';
$courses = simplexml_load_file($file);

echo '<pre>';
print_r($courses);
echo '</pre>';