<?php

/* 
    PHP Form Class from Dynamic Web Coding at dyn-web.com
    Copyright 2001-2013 by Sharon Paine
    For demos, documentation and updates, visit http://www.dyn-web.com/code/form_builder/

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

// version date: May 2013

class HTML_Form {
    
    private $tag;
    private $xhtml;
    
    function __construct($xhtml = true) {
        $this->xhtml = $xhtml;
    }
    
    function startForm($action = '#', $method = 'post', $id = '', $attr_ar = array() ) {
        $str = "<form action=\"$action\" method=\"$method\"";
        if ( !empty($id) ) {
            $str .= " id=\"$id\"";
        }
        $str .= $attr_ar? $this->addAttributes( $attr_ar ) . '>': '>';
        return $str;
    }
    
    private function addAttributes( $attr_ar ) {
        $str = '';
        // check minimized (boolean) attributes
        $min_atts = array('checked', 'disabled', 'readonly', 'multiple',
                'required', 'autofocus', 'novalidate', 'formnovalidate'); // html5
        foreach( $attr_ar as $key=>$val ) {
            if ( in_array($key, $min_atts) ) {
                if ( !empty($val) ) { 
                    $str .= $this->xhtml? " $key=\"$key\"": " $key";
                }
            } else {
                $str .= " $key=\"$val\"";
            }
        }
        return $str;
    }
    
    function addInput($type, $name, $value, $attr_ar = array() ) {
        $str = "<input type=\"$type\" name=\"$name\" value=\"$value\"";
        if ($attr_ar) {
            $str .= $this->addAttributes( $attr_ar );
        }
        $str .= $this->xhtml? ' />': '>';
        return $str;
    }
    
    function addTextarea($name, $rows = 4, $cols = 30, $value = '', $attr_ar = array() ) {
        $str = "<textarea name=\"$name\" rows=\"$rows\" cols=\"$cols\"";
        if ($attr_ar) {
            $str .= $this->addAttributes( $attr_ar );
        }
        $str .= ">$value</textarea>";
        return $str;
    }
    
    // for attribute refers to id of associated form element
    function addLabelFor($forID, $text, $attr_ar = array() ) {
        $str = "<label for=\"$forID\"";
        if ($attr_ar) {
            $str .= $this->addAttributes( $attr_ar );
        }
        $str .= ">$text</label>";
        return $str;
    }
    
    // from parallel arrays for option values and text
    function addSelectListArrays($name, $val_list, $txt_list, $selected_value = NULL,
            $header = NULL, $attr_ar = array() ) {
        $option_list = array_combine( $val_list, $txt_list );
        $str = $this->addSelectList($name, $option_list, true, $selected_value, $header, $attr_ar );
        return $str;
    }
    
    // option values and text come from one array (can be assoc)
    // $bVal false if text serves as value (no value attr)
    function addSelectList($name, $option_list, $bVal = true, $selected_value = NULL,
            $header = NULL, $attr_ar = array() ) {
        $str = "<select name=\"$name\"";
        if ($attr_ar) {
            $str .= $this->addAttributes( $attr_ar );
        }
        $str .= ">\n";
        if ( isset($header) ) {
            $str .= "  <option value=\"\">$header</option>\n";
        }
        foreach ( $option_list as $val => $text ) {
            $str .= $bVal? "  <option value=\"$val\"": "  <option";
            if ( isset($selected_value) && ( $selected_value === $val || $selected_value === $text) ) {
                $str .= $this->xhtml? ' selected="selected"': ' selected';
            }
            $str .= ">$text</option>\n";
        }
        $str .= "</select>";
        return $str;
    }
    
    function endForm() {
        return "</form>";
    }
    
    function startTag($tag, $attr_ar = array() ) {
        $this->tag = $tag;
        $str = "<$tag";
        if ($attr_ar) {
            $str .= $this->addAttributes( $attr_ar );
        }
        $str .= '>';
        return $str;
    }
    
    function endTag($tag = '') {
        $str = $tag? "</$tag>": "</$this->tag>";
        $this->tag = '';
        return $str;
    }
    
    function addEmptyTag($tag, $attr_ar = array() ) {
        $str = "<$tag";
        if ($attr_ar) {
            $str .= $this->addAttributes( $attr_ar );
        }
        $str .= $this->xhtml? ' />': '>';
        return $str;
    }
    
}