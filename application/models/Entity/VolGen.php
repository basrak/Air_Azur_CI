<?php

namespace Entity;

/**
 * @Entity
 * @Table(name="volgen")
 */
class VolGen implements JsonSerializable
{
    /**
     * @Id
     * @Column(type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     */
    private $_idVol;
    /**
     * @Column(type="string", length=10, nullable=true)
     */
    private $_codeVol;
    /**
     * @Column(type="integer", length=2, nullable=false)
     */
    private $_idArpt;
    /**
     * @Column(type="integer", length=2, nullable=false)
     */
    private $_idArptArrivee;
    /**
     * @Column(type="integer", length=3, nullable=true)
     */
    private $_placesVol;
    /**
     * @Column(type="decimal", length=13.2, nullable=true)
     */
    
    private $_prixVol;
    /**
     * @Column(type="string", length=10, nullable=true)
     */
    private $_jourVol;
      
    
    //hydratation des données à partir de la base de données
    public function hydrate(array $data)
    {
    foreach ($data as $key => $value)
        {
        // On récupère le nom du setter correspondant à l'attribut.
        $method = 'set'.ucfirst($key);       
        // Si le setter correspondant existe.
        if (method_exists($this, $method))
                {
                // On appelle le setter.
                $this->$method($value);
                }
        }
    }       
            
    //Getters
    public function getIdVol()  { return $this->_idVol; }
    public function getCodeVol()  { return $this->_codeVol; }
    public function getIdArpt()  { return $this->_idArpt; }
    public function getIdArptArrivee()  { return $this->_idArptArrivee; }
    public function getPlacesVol()  { return $this->_placesVol; }
    public function getPrixVol()  { return $this->_prixVol; }
    public function getJourVol()  { return $this->_jourVol; }
    public function getArrayVol()  { return $this->_arrayVol; }
    
    //Setters
    public function setIdVol($idVol)
    {
        $this->_idVol = $idVol;
    }
    
    public function setCodeVol($codeVol)
    {
        $this->_codeVol = $codeVol;
    }
    
    public function setIdArpt($idArpt)
    {
        $this->_idArpt = $idArpt;
    }
    
    public function setIdArptArrivee($idArptArrivee)
    {
        $this->_idArptArrivee = $idArptArrivee;
    }
    
    public function setPlacesVol($placesVol)
    {
        $this->_placesVol = $placesVol;
    }
    
    public function setPrixVol($prixVol)
    {
        $this->_prixVol = $prixVol;
    }
    
    public function setJourVol($jourVol)
    {
        $this->_jourVol = $jourVol;
    }
    
    public function jsonSerialize() {
        
        $json = array();
        foreach ($this as $key => $value) {
            $json[$key] = $value;
        }
        return json_encode($json);
    }
}  
  
