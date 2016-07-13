<?php
///EXO1///////////////////////////////////////////////
$prix = 12;
    if(isset($prix)== 0||''){
        $prix = 25;
        echo $prix;
    }

///EXO2///////////////////////////////////////////////
// $minutes = 96000;
// $days = (24*$hours)/60;
// $hours = $minutes/60;


if(isset($minutes=9600)) {
	$hours = $minutes/60;
	$days = (24*$hours)/60;
	$min = $hours%60;

	echo $days." jours ".$hours."heures et ".$min."minutes"; 
}

echo $days." jours ".$hours."heures et ".$min."minutes";



//CORRESTION
// $total_minutes = 96000;

// $jours=$total_minutes/1440;
// $jours = floor($jours)

// $restantMin = $total_minutes %1440;
// $heures = floor($restantMin/60);

// $restantMinFinal = $restantMin %60;