<?php
namespace Entity;

/**
 * @Entity
 * @Table(name="users")
 */
class Vol implements JsonSerializable
{
    /**
     * @IDVOL
     * @Column(type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     */
    private $_idVol;
    /**
     * @DATEDEPART
     * @Column(type="date", nullable=false)
     */
    private $_dateDepart;
    /**
     * @DATEARRIVEE
     * @Column(type="date", nullable=true)
     */
    private $_dateArrivee;
    
    private $_volGen;
    private $_placesRest;
       
            
    //Getters
    public function getIdVol()  { return $this->_idVol; }
    public function getDateDepart()  { return $this->_dateDepart; }
    public function getDateArrivee()  { return $this->_dateArrivee; }
    public function getPlacesRest()  { return $this->_placesRest; }
    public function getVolGen()  { return $this->_volGen; }
    
    //Setters
    public function setIdVol($idVol)
    {
        $this->_idVol = $idVol;
    }
    
    public function setDateDepart($dateDepart)
    {
        $this->_dateDepart = $dateDepart;
    }
    
    public function setDateArrivee($dateArrivee)
    {
        $this->_dateArrivee = $dateArrivee;
    }
    
    public function setVolGen($volGen)
    {
        $this->_volGen = $volGen;
    }
    
    public function setPlacesRest($placesRest)
    {
        $this->_placesRest = $placesRest;
    }
    
    public function jsonSerialize() {
        
        $json = array();
        foreach ($this as $key => $value) {
            $json[$key] = $value;
        }
        return json_encode($json);
    }
   
}