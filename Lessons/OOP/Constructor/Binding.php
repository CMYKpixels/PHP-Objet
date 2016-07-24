<?php

    class Mother
    {
        public static function who(){
            //Constante Magique qui va donner le nom de la classe
            echo __CLASS__;
        }
        public static function test(){
            self::who();
        }
    }

    class Child extends Mother
    {
        public static function who ()
        {
            echo __CLASS__;
        }
    }
    Child::test();

    //