<?php

    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 01/09/2016
     * Time: 16:43
     * Class to describe a single label field.
     * Labels should be contained inside of inputs on a 1:1 relationship.
     */
    class Label extends Field
    {
        public $element ="label";

        public function __construct($text, array $attribute_list = array())
        {
            $this->text = $text;
            $this->attribute_list = $attribute_list;
        }

        public function toString()
        {
            return $this->text;
        }
    }