<?php
/**
 * Created by PhpStorm.
 * User: CMYKpixels
 * Date: 27/06/2016
 * Time: 10:07
 */

const UTILISATEUR   = 1;
const PREMIUM       = 2;
const ADMIN         = 4;
const SUPER_ADMIN   = 8;
const ANONYME       = 16;

$state = UTILISATEUR | SUPER_ADMIN | PREMIUM | ADMIN | ANONYME;

echo "valeur: $state<br>";
echo "suis-je un super utilisateur ?".(bool)($state & PREMIUM)."<br>";
echo "suis-je un admin ?".(bool)($state & ADMIN)."<br>";
echo "suis-je un super admin ?".(bool)($state & SUPER_ADMIN)."<br>";
echo "suis-je un Anonyme ?".(bool)($state & ANONYME)."<br>";
echo "suis-je un super admin ou super utilisateur ?".(bool)($state ==(UTILISATEUR | SUPER_ADMIN))."<br>";
