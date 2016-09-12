<?php


class FormBase
{

    protected $fields = array();
    protected $formAttributes = array();

    public function addField($fieldid,$fieldType,$label=null,$value=null)
    {
        $this->fields[]=array('name'=>$fieldid,'type'=>$fieldType,'label'=>$label,'value'=>$value);

    }

    public function removeField($fieldid)
    {
        foreach($this->fields as $key => $fields)
        {
                if($fields['name']==$fieldid){
                    unset($this->fields[$key]);
                }
        }
    }

    public function getFormPost()
    {
        $form = new FormBuilder();
        $form->setFormAttributes($this->formAttributes);

        $form->setFields($this->fields);
        $formulaire = $form->generate();
        return $formulaire;
    }

    public function hydrate(array $data)
    {
        foreach($data as $key => $d){
            foreach($this->fields as $key2 => $field)
            {
                if($field['name']==$key)
                {
                    $this->fields[$key2]['value']=$d;
                }
            }
        }
    }
}