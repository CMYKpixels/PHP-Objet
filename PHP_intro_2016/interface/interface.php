<?php

class XML implements Trans
{
    public function execute()
    {
        // TODO: Implement execute() method.
    }

    public function search()
    {
        // TODO: Implement search() method.
    }
}

class BDD implements Trans{
    public function execute()
    {
        // TODO: Implement execute() method.
    }

    public function search()
    {
        // TODO: Implement search() method.
    }
}

// Cette interface ne fait qu'obliger les classes qui l'implémentent
// a déclarer les fonction execute() et search()

interface Trans
{
    public function execute();
    public function search();
}




$translator = new Translator();
$translator->setLanguage('ES');
$translator->t('signup');

