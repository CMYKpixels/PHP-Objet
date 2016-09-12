<?php

    class Turtle
    {
        /**
         * @param string $color
         */
        public function setColor(string $color)
        {
            $this->color = $color;
        }

        static public function sayPhrase()
        {
            return self::$catchPhrase;

//            echo self::$catchPhrase;
            //ou
//            echo Turtle::$catchPhrase;
        }

        public        $color       = 'color';
        public        $name        = 'name';
        static public $weapon      = 'weapon';
        static public $catchPhrase = 'kawabunga';

        public function Ninjas()
        {
            echo 'Chevaliers d\'écailles et de vinyles !';
            echo '<br>';
            echo 'Nom : ' . $this->name;
            echo '<br>';
            echo 'bandeau : ' . $this->color;
            echo '<br>';
            echo 'armes : ' . Turtle::$weapon;
            echo '<br>';
            echo self::sayPhrase();

        }
    }

    $Leo = new Turtle();
    echo $Leo->setColor('blue');
    echo '<br>';
    echo Turtle::$weapon = 'saber';
    echo '<br>';
    echo $Leo->name = 'Léonardo';