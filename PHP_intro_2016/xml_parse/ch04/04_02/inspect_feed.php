<?php
$cache = '../../xml/bbc_tech.xml';
$feed = simplexml_load_file($cache);

echo 'Total items: ' . $feed->count();

/*echo '<pre>';
print_r($feed);
echo '</pre>';*/