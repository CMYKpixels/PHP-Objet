<?php

class Voiture{
    private $_vitesse = 150;
    private $_puissance = 115;
    private $_prix = 20000;
    private $_gain = 0;
    private $_nbrCourseGagnees = 0;
    private $_maintenance = 200;

    const VOITURE_OK=1;
    const VOITURE_MAINTENANCE=2;

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


    public function faireLaCourse(Voiture $voiture){
        if($this->checkMaintenance()==self::VOITURE_MAINTENANCE){
            return 'La voiture ne peut pas courrir';
        }
        if($voiture->getVitesse() > $this->getVitesse()){
            $voiture->gagnerCourse();
            $this->perdreCourse();
        }elseif($voiture->getVitesse() < $this->getVitesse()){
            $voiture->perdreCourse();
            $this->gagnerCourse();
        }
        $voiture->diminuerMaintenance();
        $this->diminuerMaintenance();
    }

    public function checkMaintenance(){
        if($this->_maintenance<100){
            return self::VOITURE_MAINTENANCE;
        }
    }

    public function diminuerMaintenance(){
        $this->_maintenance-=100;
    }

    private function gagnerCourse(){
        $this->_gain+=1000;
        $this->_nbrCourseGagnees++;
    }

    private function perdreCourse(){
        $this->_gain+=50;
    }

}

header('Content-Type: text/html;charset=UTF8');

$voiture1 = new Voiture;
$voiture1->setMaintenance(100);
$voiture2 = new Voiture;
$voiture2->setVitesse(90);
$voiture1->faireLaCourse($voiture2);
echo 'Voiture 1 Gain:';
echo $voiture1->getGain();
echo '<br />';
echo 'Voiture 1 Courses Gagnées:';
echo $voiture1->getNbrCourseGagnees();
echo '<br />';
echo 'Voiture 2 Gain:';
echo $voiture2->getGain();
echo '<br />';
echo 'Voiture 2 Courses Gagnées:';
echo $voiture2->getNbrCourseGagnees();

echo '<br />';
$voiture1->faireLaCourse($voiture2);
echo 'Voiture 1 Gain:';
echo $voiture1->getGain();
echo '<br />';
echo 'Voiture 1 Courses Gagnées:';
echo $voiture1->getNbrCourseGagnees();
echo '<br />';
echo 'Voiture 2 Gain:';
echo $voiture2->getGain();
echo '<br />';
echo 'Voiture 2 Courses Gagnées:';
echo $voiture2->getNbrCourseGagnees();


