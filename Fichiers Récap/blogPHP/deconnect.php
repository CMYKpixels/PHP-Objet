<?php
require_once'includes/functions.php';
session_unset();
session_destroy();
setcookie('user',false,time(-1));
header('location:index.php');
?>