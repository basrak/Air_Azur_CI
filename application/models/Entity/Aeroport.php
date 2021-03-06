<?php
namespace Entity;

/**
 * @Entity
 * @Table(name="Aeroport")
 */
class Aeroport implements JsonSerializable {
    /**
     * @Id
     * @Column(type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     */
    private $_idArpt;
    
     /**
     * @Column(type="string", length=20, nullable=true)
     */
    private $_nomArpt;
    
     /**
     * @Column(type="string", length=30, nullable=true)
     */
    private $_villeArpt;
       
         
    //Getters
    public function getIdArpt()  { return $this->_idArpt; }
    public function getNomArpt()  { return $this->_nomArpt; }
    public function getVilleArpt()  { return $this->_villeArpt; }
    
    //Setters
    public function setIdArpt($idArpt)
    {
        $this->_idArpt = $idArpt;
    }
    
    public function setNomArpt($nomArpt)
    {
        $this->_nomArpt = $nomArpt;
    }
    
    public function setVilleArpt($villeArpt)
    {
        $this->_villeArpt = $villeArpt;
    }
    
     public function jsonSerialize() {
        
        $json = array();
        foreach ($this as $key => $value) {
            $json[$key] = $value;
        }
        return json_encode($json);
    }
    
    
    
    
}
    

