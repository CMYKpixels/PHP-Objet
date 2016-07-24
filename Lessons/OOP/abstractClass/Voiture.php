<?php

abstract class Voiture {
    private $_vitesse = 150;
    private $_puissance = 115;
    private $_prix = 20000;
    private $_gain = 0;
    private $_nbrCourseGagnees = 0;
    private $_maintenance = 200;
    private $_state;

    const VOITURE_OK=1;
    const VOITURE_MAINTENANCE=2;

    public function __construct(){

    }

    /**
     * @return int
     */
    public function getVitesse()
    {
        return $this->_vitesse;
    }

    /**
     * @param int $vitesse
     */
    public function setVitesse($vitesse)
    {
        $this->_vitesse = $vitesse;
    }

    /**
     * @return int
     */
    public function getPuissance()
    {
        return $this->_puissance;
    }

    /**
     * @param int $puissance
     */
    public function setPuissance($puissance)
    {
        $this->_puissance = $puissance;
    }

    /**
     * @return int
     */
    public function getPrix()
    {
        return $this->_prix;
    }

    /**
     * @param int $prix
     */
    public function setPrix($prix)
    {
        $this->_prix = $prix;
    }

    /**
     * @return int
     */
    public function getGain()
    {
        return $this->_gain;
    }

    /**
     * @param int $gain
     */
    public function setGain($gain)
    {
        $this->_gain = $gain;
    }

    /**
     * @return int
     */
    public function getNbrCourseGagnees()
    {
        return $this->_nbrCourseGagnees;
    }

    /**
     * @param int $nbrCourseGagnees
     */
    public function setNbrCourseGagnees($nbrCourseGagnees)
    {
        $this->_nbrCourseGagnees = $nbrCourseGagnees;
    }

    /**
     * @return int
     */
    public function getMaintenance()
    {
        return $this->_maintenance;
    }

    /**
     * @param int $maintenance
     */
    public function setMaintenance($maintenance)
    {
        $this->_maintenance = $maintenance;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->_state = $state;
    }


    public function faireLaCourse(Voiture $voiture){
        if($this->checkMaintenance()==self::VOITURE_MAINTENANCE){
            $this->setState(self::VOITURE_MAINTENANCE);
        }

        $this->diminuerMaintenance();
        if($voiture->getVitesse() > $this->getVitesse()){
            $this->perdreCourse();
            return false;
        }elseif($voiture->getVitesse() < $this->getVitesse()){
            $this->gagnerCourse();
            return true;
        }
    }

    public function checkMaintenance(){
        if($this->_maintenance<100){
            return self::VOITURE_MAINTENANCE;
        }
    }

    protected function diminuerMaintenance(){
        $this->_maintenance-=100;
    }

    protected function gagnerCourse(){
        $this->_gain+=1000;
        $this->_nbrCourseGagnees++;
    }

    protected function perdreCourse(){
        $this->_gain+=50;
    }

}



