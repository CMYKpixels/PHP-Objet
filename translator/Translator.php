<?php

    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 02/09/2016
     * Time: 13:51
     */

    /*
    class Translator
    {
        private $language ='en';
        private $idioma = array();

        public function __construct($language)
        {
            $this->language=$language;
        }

        private function findString($str)
        {
            if (array_key_exists($str, $this->idioma[$this->language]))
            {
                echo $this->idioma[$this->language][$str];
                return;
            }
            echo $str;
        }
    */

    class multiLanguage
    {
        public static $xml;

        public static function getLanguage($language = 'en')
        {
            if(!isset($language)){
                $language = 'en';
            }

            // load xml file from langs folder
            self::$xml = simplexml_load_file("./langs/$language.xml");

        }

        public static function translateRecursive($input)
        {

            if (is_array($input)) {


                $input = multiLanguage::$xml->$input[1];
            }


            return preg_replace_callback('/-#(.+?)#-/', 'multiLanguage::translateRecursive', $input);
        }

    }






