<?php

function loadMyClass($classe){
    include $classe.'.php';
}
spl_autoload_register('loadMyClass');

header('Content-Type: text/html;charset=UTF8');

$nissan = new Nissan();
$nissan->setMaintenance(200);
$cadillac = new Cadillac();
$cadillac->setVitesse(90);
$nissan->faireLaCourse($cadillac);
$cadillac->faireLaCourse($nissan);
echo 'Nissan 1 Gain:';
echo $nissan->getGain();
echo '<br />';
echo 'Nissan 1 Courses Gagnées:';
echo $nissan->getNbrCourseGagnees();
echo '<br />';
echo 'Cadillac 2 Gain:';
echo $cadillac->getGain();
echo '<br />';
echo 'Voiture 2 Courses Gagnées:';
echo $cadillac->getNbrCourseGagnees();

/*echo '<br />';
$voiture1->faireLaCourse($voiture2);
$voiture2->faireLaCourse($voiture1);
echo 'Voiture 1 Gain:';
echo $voiture1->getGain();
echo '<br />';
echo 'Voiture 1 Courses Gagnées:';
echo $voiture1->getNbrCourseGagnees();
echo '<br />';
echo 'Voiture 2 Gain:';
echo $voiture2->getGain();
echo '<br />';
echo $voiture2->getBonus();
echo '<br />';
echo 'Voiture 2 Courses Gagnées:';
echo $voiture2->getNbrCourseGagnees();*/