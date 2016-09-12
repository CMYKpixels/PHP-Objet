<?php

    class formBuilder
    {
        protected $_inputs;
        private   $_method, $_action;

        public
        function __construct($method, $action = NULL)
        {
            $this->_method = $method;
            $this->_action = $action;
        }

        public
        function addInput($type, $id, $class, $name, $value, $placeholder = NULL)
        {
            $this->_inputs[] = array(
                'type'        => $type,
                'id'          => $id,
                'class'       => $class,
                'name'        => $name,
                'value'       => $value,
                'placeholder' => $placeholder,
            );
        }

        public
        function addLabel($name)
        {
            $this->_inputs[] = array(
                'type' => 'label',
                'name' => $name,
            );
        }

        public
        function addTextarea($name, $id, $class, $placeholder = NULL, $value)
        {
            $this->_inputs[] = array(
                'type'        => 'textarea',
                'name'        => $name,
                'id'          => $id,
                'class'       => $class,
                'placeholder' => $placeholder,
                'value'       => $value,
            );
        }

        public
        function generateForm()
        {

            $html = '<form class="form-signin" action ="'.$this->_action.'" method="'.$this->_method.'"/>';

            for($i = 0; $i<count($this->_inputs); $i++) {

                switch($this->_inputs[$i]['type']) {

                    case "label":
                        $html .= '<label for="'.$this->_inputs[$i]['name'].'">'.$this->_inputs[$i]['name'].'</label><br>';
                        break;
                    case "text":
                    case "password":
                    case "submit":
                    case "email":
                        $html .= '<input type="'.$this->_inputs[$i]['type'].'" ';
                        $html .= ' id="'.$this->_inputs[$i]['id'].'" ';
                        $html .= ' class="'.$this->_inputs[$i]['class'].'" ';
                        $html .= ' name="'.$this->_inputs[$i]['name'].'" ';
                        $html .= ' value="'.$this->_inputs[$i]['value'].'" ';
                        $html .= ' placeholder="'.$this->_inputs[$i]['placeholder'].'"/><br>';
                        break;
                    case
                    "textarea":
                        $html .= '<textarea name="'.$this->_inputs[$i]['name'].' value="'.$this->_inputs[$i]['value'].'" placeholder="'.$this->_inputs[$i]['placeholder'].'"/></textarea></br></br>';
                        break;
                }
            }

            $html .= '</form>';

            return $html;
        }


    }
