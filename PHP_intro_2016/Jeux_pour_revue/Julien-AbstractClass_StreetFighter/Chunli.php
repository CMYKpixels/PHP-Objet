<?php

    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 20/07/2016
     * Time: 10:22
     */
    class Chunli extends Shoto
    {
        private $_spinBirdKick;

        /**
         * @return mixed
         */
        public function getSpinBirdKick ()
        {
            return $this->_spinBirdKick;
        }

        /**
         * @param mixed $spinBirdKick
         */
        public function setSpinBirdKick ($spinBirdKick)
        {
            $this->_spinBirdKick = $spinBirdKick;
        }
        
        public function Fight(Shoto $shoto1){
            $res = parent::Fight($shoto1);
            
            if($res==true){
                $championship = $this->getRound();
                $this->setRound($championship);
            }
        }
    }