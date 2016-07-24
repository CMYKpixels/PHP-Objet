<?php

    class First
    {
        public $prop = 'random prop';

        public function testing ()
        {
            return 'something';
        }

        public function calculation ()
        {
            echo 'calculation in parent';
        }
    }

    class second extends First
    {
        public function testing ()
        {
            $retour = parent::testing();
            echo $retour;
    }
        public function testingParentProp(){
            echo $this->prop;
        }
        public function calculation(){
            echo 'calculation in children';
        }
    }

    $enfant = new second();
    echo $enfant->prop;