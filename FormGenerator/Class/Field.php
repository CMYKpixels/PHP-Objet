<?php
    /**
     * Base object for all Fields.
     */

    class Field
    {
        public $element;
        public $attribute_list = array();
        public $text;

        const TAB = "   ";


        public
        function __construct($element, $text = "", array $attribute_list)
        {
            $this->element        = $element;
            $this->attribute_list = $attribute_list;
            $this->text           = $text;
        }

        public
        function __toString()
        {
            // Open HTML Field element
            $result = "<".$this->element;

            // HTML Field List
            $result .= $this->string_attribute_list();

            $result .= ">";

            // Close HTML Field element
            return $result;
        }

        public
        function string_attribute_list()
        {
            $result = "";
            if( !empty($this->attribute_list)) {
                foreach($this->attribute_list as $attr => $value) {
                    $result .= " ".$attr."='".$value."'";
                }
            }

            return $result;
        }

    }

/*
class FormBase
{
    protected $field = array();
    protected $formAttibutes = array ();

    public function addField($fieldID, $fieldType, $label = NULL,
}
*/