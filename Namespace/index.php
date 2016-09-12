<?php
    include 'Bass/SuzuFujimi.php';
    include 'Drums/FuuriWatanuki.php';
    include 'Guitar/SuperSonico.php';
    include 'Band/SuperAstronomicalVelocity.php';

    use Band as SuperAstronomicalVelocity;
    use Bass as SuzuFujimi;
    use Drums as FuuriWatanuki;
    use BandLeader as SuperSonico;

    $Sonico   = new \BandLeader\SuperSonico();
    $Bass     = new \Bass\SuzuFujimi();
    $Drums    = new \Drums\FuuriWatanuki();
    $Releases = new \Band\SuperAstronomicalVelocity();

//    $Sonico = strlen('Lyrics & songs');

    echo Bass\SuzuFujimi::plays(), "<br/>";
    echo "<img src='".$Bass->portrait()."'/>";
    echo '<br/>';


    echo Drums\FuuriWatanuki::plays(), "<br/>";
    echo "<img src='".$Drums->portrait()."'/>";
    echo '<br/>';


    echo BandLeader\SuperSonico::sings(), "<br/>";
    echo "<img src='".$Sonico->portrait()."'/>";
    echo '<br/>';


    ;
