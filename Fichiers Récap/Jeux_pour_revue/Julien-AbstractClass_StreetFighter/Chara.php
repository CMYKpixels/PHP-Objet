<?php

    class Chara
    {
        private $kick   = 50;
        private $random = 50;

        private $_round   = 1;
        private $_lifeBar = 750;

//        private $punch     = 20;
//        private $_Vtrigger = 100;
//        private $_Vskill   = 500;

        const CHARA_LIFE  = 0;
        const CHARA_ROUND = 0;


        /**
         * @return int
         */
        public function getKick ()
        {
            $random = $this->random += rand(15, 50);

            return $this->kick = $random;
        }

        /**
         * @param int $kick
         */
        public function setKick ($kick)
        {
            $this->kick = $kick;
        }

        /**
         * @return int
         */
        public function getRound ()
        {
            return $this->_round;
        }

        /**
         * @param int $round
         */
        public function setRound ($round)
        {
            $this->_round = $round;
        }

        /**
         * @return int
         */
        public function getLifeBar ()
        {
            return $this->_lifeBar;
        }

        /**
         * @param int $lifeBar
         */
        public function setLifeBar ($lifeBar)
        {
            $this->_lifeBar = $lifeBar;
        }

        /**
         * @return int
         */
        public function getRandom ()
        {
            return $this->random;
        }

        /**
         * @param int $random
         */
        public function setRandom ($random)
        {
            $this->random = $random;
        }

        public function fight (Chara $Chara)
        {
            if ($this->checkLifeBar() == self::CHARA_ROUND) {
                return 'Fighter K.-O.';
            }
            if ($Chara->getKick() >= self::getKick()) {
                $this->getKick();

            } elseif ($Chara->getKick() < self::getKick()) {
                $this->looseLife();
            }
//            if ($Chara->getLifeBar() >= 0) {
//                $this->_round++;
//                return CHARA_KO = FALSE;
//            }

            $this->winRound();
            $this->looseRound();

}

        public function checkLifeBar ()
        {
            $random = $this->random += rand(275,300);
            return $this->_lifeBar = $random;
        }

        public function winRound ()
        {
            if ($this->_lifeBar > 0) {
                $this->_round++;
            }

        }

        public function looseRound ()
        {
            if ($this->_lifeBar <= 0) {
                $this->_round--;
            }
        }
        public function looseLife ()
        {
            $this->_lifeBar -= $this->getKick();
            }
    }

    header('Content-Type: text/html;charset=UTF8');


    $Chara1 = new Chara;
    $Chara1->getLifeBar();
//    echo $Chara1->setKick(rand(15, 65));
    echo $Chara1->getKick();

    $Chara2 = new Chara;
    $Chara2->getLifeBar();
    $Chara2->fight($Chara1);
    echo 'Round:';
    echo $Chara1->getRound();
    echo '<br />';
    echo 'Life:';
    echo $Chara1->getLifeBar();
    echo '<br />';
    echo 'Round:';
    echo $Chara2->getRound();
    echo '<br />';
    echo 'Life:';
    echo $Chara2->getLifeBar();