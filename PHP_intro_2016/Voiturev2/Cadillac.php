<?php

/**
 *
 */
class Cadillac extends Voiture
{
    private $_bonus=0;

    public function getBonus()
    {
        return $this->_bonus;
    }

    public function setBonus($bonus)
    {
        $this->_bonus = $bonus;
    }

    public function faireLaCourse(Voiture $voiture){
        $res = parent::faireLaCourse($voiture);

        if($res==true){
            $this->_bonus+=500;
            $newGain = $this->getGain() + $this->_bonus;
            $this->setGain($newGain);
        }
    }
}