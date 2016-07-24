<?php
    class Voiture {
        private $_vitesse=150;
        private $_puissance=250;
        private $_prix=200000;
        private $_gain=0;
        private $nbCourseGagnees=0;
        private $_maintenance=200;

        const VOITURE_OK=1;
        const VOITURE_MAINTENANCE=2;

        /**
         * @return int
         */
        public function getVitesse ()
        {
            return $this->_vitesse;
        }

        /**
         * @param int $vitesse
         */
        public function setVitesse ($vitesse)
        {
            $this->_vitesse = $vitesse;
        }

        /**
         * @return int
         */
        public function getPuissance ()
        {
            return $this->_puissance;
        }

        /**
         * @param int $puissance
         */
        public function setPuissance ($puissance)
        {
            $this->_puissance = $puissance;
        }

        /**
         * @return int
         */
        public function getPrix ()
        {
            return $this->_prix;
        }

        /**
         * @param int $prix
         */
        public function setPrix ($prix)
        {
            $this->_prix = $prix;
        }

        /**
         * @return int
         */
        public function getGain ()
        {
            return $this->_gain;
        }

        /**
         * @param int $gain
         */
        public function setGain ($gain)
        {
            $this->_gain = $gain;
        }

        /**
         * @return int
         */
        public function getNbCourseGagnees ()
        {
            return $this->nbCourseGagnees;
        }

        /**
         * @param int $nbCourseGagnees
         */
        public function setNbCourseGagnees ($nbCourseGagnees)
        {
            $this->nbCourseGagnees = $nbCourseGagnees;
        }

        /**
         * @return int
         */
        public function getMaintenance ()
        {
            return $this->_maintenance;
        }

        /**
         * @param int $maintenance
         */
        public function setMaintenance ($maintenance)
        {
            $this->_maintenance = $maintenance;
        }

        public function faireLaCourse(Voiture $voiture){
            if($this->checkMaintenance()==self::VOITURE_MAINTENANCE){
                return;
            }
            if($voiture->getVitesse() > $this->getVitesse()) {
                $this->perdreCourse();
                $voiture->gagnerCourse();
            }elseif ($voiture->getVitesse() < $this->getVitesse()){
                $this->gagnerCourse();
                $voiture->perdreCourse();
            }
        }
        private function gagnerCourse(){
            $this->_gain+=1000;
            $this->nbCourseGagnees++;
        }
        private function perdreCourse(){
            $this->_gain+=50;
            $this->nbCourseGagnees--;
        }

        private function checkMaintenance(){
            if($this->getMaintenance()<100){
                return self::VOITURE_MAINTENANCE;
            }
        }
        public function diminuerMaintenance(){
            if($this->_maintenance-=100);
}
    }

    header('Content-Type: text/html; charset=UTF8');

    $voiture1 = new Voiture();
    $voiture1->setMaintenance(100);
    $voiture2 = new Voiture();
    $voiture2->setVitesse(90);
//    var_dump($voiture2);
//    die();
    $voiture1->faireLaCourse($voiture2);
    echo 'voiture 1 Gain:';
    echo $voiture1->getGain();
    echo '<br>';
    echo 'voiture  Courses Gagnées:';
    echo $voiture1->getGain();
    echo '<br>';



