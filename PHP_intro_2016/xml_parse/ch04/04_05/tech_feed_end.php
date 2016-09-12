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
    if ($xml = @ file_get_contents($url)) {
        file_put_contents($cache, $xml);
    }
}

// if the cache file exists, suppress errors
// and load it as SimpleXML
if (file_exists($cache)) {
    libxml_use_internal_errors(true);
//    $feed = simplexml_load_file($cache, 'SimpleXMLIterator');
    $feed = new SimpleXMLIterator($cache, null, true);
} else {
    $feed = false;
}

class GetLatest extends FilterIterator
{
    protected $cutoff;

    public function __construct(SimpleXMLElement $simplexml)
    {
        parent::__construct($simplexml);
        $this->cutoff = new DateTime('-2 days');
    }

    public function accept()
    {
        $pubdate = new DateTime($this->current()->pubDate);
        return $pubdate > $this->cutoff;
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Technology News</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<h1>Keep Up with Technology from BBC News</h1>
<?php
if ($feed === false) {
    echo '<p>Sorry, technology feed unavailable.</p>';
} else {
    $items = new GetLatest($feed->channel->item);
    foreach ($items as $item) {
        echo '<article>';
        echo "<h2><a href='$item->link'>$item->title</a></h2>";
        $thumbnail = $item->children('media', true)[1];
        $atts = $thumbnail->attributes();
        foreach ($atts as $key => $value) {
            $$key = $value;
        }
        echo "<figure><a href='$item->link'>";
        echo "<img src='$url' width='$width' height='$height' alt=''></a></figure>";
        $date = new DateTime($item->pubDate);
        $date->setTimezone(new DateTimeZone('America/Los_Angeles'));
        echo '<p>' . $date->format('g:i a T, F j, Y') . '</p>';
        echo "<p>$item->description</p>";
        echo '</article>';
    }
}
?>
</body>
</html>