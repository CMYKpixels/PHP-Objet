<?php

    class Cadillac extends Voiture
    {
        private $_bonus=0;

        /**
         * @return int
         */
        public function getBonus ()
        {
            return $this->_bonus;
        }

        /**
         * @param int $bonus
         */
        public function setBonus ($bonus)
        {
            $this->_bonus = $bonus;
        }

        public function faireLaCourse(Voiture $voiture){
        $res = parent::faireLaCourse($voiture);
            if($res==true){
                $this->_bonus+=500;
                $newGain = $this->getGain()+$this->_bonus;
            }
        }
    }