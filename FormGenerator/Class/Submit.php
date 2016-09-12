<?php

    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 01/09/2016
     * Time: 16:44
     */
    class Submit extends Button
    {
        public $type = "submit";

        public function __construct($text = "Submit", array $attribute_list = array())
        {
            $attribute_list["type"] = $this->type;
            parent::__construct($text, $attribute_list);
        }
    }