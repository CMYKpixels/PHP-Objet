<?php

    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 01/09/2016
     * Time: 16:44
     */
    class Button extends Field
    {
        public $element = "button";

        public function __construct($text, array $attribute_list = array())
        {
            parent::__construct($this->element, $text, $attribute_list);
        }
    }