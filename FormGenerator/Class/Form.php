<?php

    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 01/09/2016
     * Time: 15:57
     *
     * The Form object, will describe a single form.
     * After constructing it is done, it should format
     * into a cool, simple, valid, readable, HTML code.
     */

    class Form extends Field
    {
        public $element = "form";

        public $field_list;
        public $action;
        public $method = Form::METHOD_POST;

        const METHOD_POST = 'POST';
        const METHOD_GET = 'GET';

        public
        function __construct($action, $method = self::METHOD_POST, array $attribute_list = array())
        {
            $this->action = $action;
            $this->method = $method;
            $this->attribute_list = $attribute_list;

        }

        public function add(Field $field)
        {
            $this->field_list[] = $field;
            return $this;
        }

        public function __toString()
        {
            // Open <form... tag
            $result = "<".$this->element." action='".$this->action."' method='".$this->method."'";

            //Attribute List
            $result .= $this->string_attribute_list();

            // Close ... tag
            $result .= ">";

            // Loop through the fields
            foreach ($this->field_list as $field) {
                $result .= "\n".self::TAB.str_replace("\n", "\n".self::TAB, $field->__toString());
            }

            // Close .../form> tag
            $result .= "\n</".$this->element.">";

            return $result;
        }
    }