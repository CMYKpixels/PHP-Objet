<?php

include 'FormBuilder.php';
include 'FormBase.php';

class FormPost extends FormBase
{
    public function __construct()
    {
        $this->prepareFormPostBuilder();
        $this->FormPostAttributesSetup();
    }

    public function prepareFormPostBuilder()
    {
        $this->addField('email','email','Email');
        $this->addField('username','text','Username');
        $this->addField('password','password','Password');
        $this->addField('description','textarea','Description');
        $this->addField('submit','button','Submit');
    }

    public function FormPostAttributesSetup()
    {
        $this->formAttributes=array(
            'method' => 'post',
            'action' => 'service.php',
        );
    }

}

