<?php

    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 01/09/2016
     * Time: 16:43
     * Class to describe a single input field
     */
    class Input extends Field
    {
        public $element = "input";
        public $type;
        public $label;
        public $name;
        public $default_value;

//        public $label_before_input = TRUE;

        public
        function __construct($type, $name, Label $label, $default_value = "", array $attribute_list = array())
        {
            $this->type           = $type;
            $this->name           = $name;
            $this->label          = $label;
            $this->default_value  = $default_value;
            $this->attribute_list = $attribute_list;
        }

        public function __toString()
        {
            // Open <Label... tag
            $result = "<".$this->label->element;

            // Begin Attribute List
            $result .= $this->label->string_attribute_list();

            // Close .../> tag
            $result .= ">";

            return $result;
        }
    }