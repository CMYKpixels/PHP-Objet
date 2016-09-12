<?php
$url = 'http://feeds.bbci.co.uk/news/technology/rss.xml';
$cache = '../../xml/bbc_tech.xml';
$lifetime = 60 * 60 * 24;

// find out when the cache was last updated
if (file_exists($cache)) {
    $modified = filemtime($cache);
}

// create or update the cache if necessary
if (!isset($modified) || $modified + $lifetime < time()) {
    if ($xml = file_get_contents($url)) {
        if (file_put_contents($cache, $xml)) {
            echo 'XML file created';
        } else {
            echo "Couldn't write XML to file";
        }
    } else {
        echo "Couldn't retrieve feed from $url";
    }
} else {
    echo 'File is up to date';
}
