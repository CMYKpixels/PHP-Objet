<?php

    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 01/09/2016
     * Time: 16:44
     */
    class Fieldset extends Field
    {
        public $element = "fieldset";
        public $field_list;
        public $legend;

        public
        function __construct($legend)
        {
            $this->legend = $legend;
        }

        public
        function add(Field $field)
        {
            $this->field_list[] = $field;

            return $this;
        }

        public
        function __toString()
        {
            //Open Tag
            $result = "<".$this->element;
            //Attribute List
            $this->string_attribute_list();
            //Close opening tag
            $result .= ">";
            //Legend Text
            $result .= "\n".self::TAB."<legend>".$this->legend."</legend>";

            //Loop throught field list
            foreach($this->attribute_list as $field)
            {
                $result .= "\n".self::TAB.str_replace("\n", "\n".self::TAB, $field->__toString());
            }

            //Close fieldset tag
            $result .= "\n".$this->element.">";

            return $result;
        }
    }