<?php
$cel = [
    'footballeur' => 'Messi',
    'politique' => 'Obama',
    'chanteur' => 'Bruno Mars'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Celebrites foreach</title>
    <link rel="stylesheet" href="../facility_8/styles.css" type="text/css">
</head>
<body>
<h1>Célébrités</h1>
<?php
foreach($cel as $key => $value) {
    echo $value." est ".$key."<br>";
}
?>
</body>
</html>