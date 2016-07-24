<?php

class Nissan extends Voiture
{
    private $_malus;

    /**
     * @return mixed
     */
    public function getMalus()
    {
        return $this->_malus;
    }

    /**
     * @param mixed $malus
     */
    public function setMalus($malus)
    {
        $this->_malus = $malus;
    }

    public function faireLaCourse(Voiture $voiture){
        $res = parent::faireLaCourse($voiture);

        if($res==true){
            $newGain = $this->getGain() - 200;
            $this->setGain($newGain);
        }
    }
}