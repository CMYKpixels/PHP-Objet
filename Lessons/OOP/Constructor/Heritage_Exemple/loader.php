<?php
function loadMyClass($classe) {
    include $classe.'.php';
}
    spl_autoload_register('loadMyClass');

    header('contentType: text/html;charset=utf-8');

    $nissan = new Nissan();
    $nissan -> setMaintenance(200);
    $cadillac = new Cadillac();
    $cadillac -> setVitesse(90);
    $nissan->faireLaCourse($cadillac);
    $cadillac->faireLaCourse($nissan);

    echo 'Nissan Gain:';
    echo $nissan->getGain();
    echo '<br />';
    echo 'Nissan Courses Gagnées:';
    echo $nissan->getNbrCourseGagnees();
    echo '<br />';
    echo 'Cadillac Gain:';
    echo $cadillac->getGain();
    echo '<br />';
    echo 'Cadillac Courses Gagnées:';
    echo $cadillac->getNbrCourseGagnees();

    echo '<br />';
    $nissan->faireLaCourse($cadillac);
    echo 'Nissan Gain:';
    echo $nissan->getGain();
    echo '<br />';
    echo 'Nissan Courses Gagnées:';
    echo $nissan->getNbrCourseGagnees();
    echo '<br />';
    echo 'Cadillac Gain:';
    echo $cadillac->getGain();
    echo '<br />';
    echo 'Cadillac Courses Gagnées:';
    echo $cadillac->getNbrCourseGagnees();