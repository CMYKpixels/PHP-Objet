<?php


class FormBuilder
{
    protected $attributes;
    protected $fields;

    public function generate(){
        $formAttributes='';
            foreach($this->attributes as $k => $a)
            {
                $formAttributes .= "$k='$a' ";
            }
        $output = "<form $formAttributes >";

        foreach($this->fields as $key => $field)
        {
            extract($field);
            if($type == "button")
            {
                $output.="<button id='$name'>$label</button>";
            }elseif($type=="textarea"){
                if($label !== NULL){
                    $output.= "<label>$label</label><br>";
                }
                $output.="<textarea name='$name' id='$name'>$value</textarea><br>";
            }else{
                if($label !== NULL){
                    $output.= "<label>$label</label><br>";
                }
                $output.="<input type='$type' name='$name' id='$name' value='$value' /><br>";
            }
        }

        $output .= "</form>";
        return $output;
    }

    public function setFormAttributes(array $attributes)
    {
        $this->attributes = $attributes;
    }

    public function setFields(array $fields)
    {
        $this->fields = $fields;
    }
}


