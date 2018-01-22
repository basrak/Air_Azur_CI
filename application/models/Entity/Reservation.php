<?php

namespace Entity;

/**
 * @Entity
 * @Table(name="reservation")
 */
class Reservation implements JsonSerializable
{
    /**
     * @Id
     * @Column(type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     */
    private $_idUsers;
    
     
    /**
     * @Column(type="integer", length=4, nullable=false)
     */
    private $_idReserv;
    /**
     * @Column(type="integer", length=2, nullable=false)
     */
    private $_idClient;
    /**
     * @Column(type="integer", length=5, nullable=false)
     */
    private $_idVol;
    /**
     * @Column(type="datetime", nullable=false)
     */
    private $_dateDepart;
    /**
     * @Column(type="date", nullable=true)
     */
    private $_dateReserv;
    /**
     * @Column(type="integer", length=3, nullable=true)
     */
    private $_nbrReserv;
    
    
        
            
    //Getters
    public function getIdUsers()  { return $this->_idUsers; }
    public function getIdReserv()  { return $this->_idReserv; }
    public function getIdClient()  { return $this->_idClient; }
    public function getIdVol()  { return $this->_idVol; }
    public function getDateDepart()  { return $this->_dateDepart; }
    public function getDateReserv()  { return $this->_dateReserv; }
    public function getNbrReserv()  { return $this->_nbrReserv; }

    //Setters
     public function setIdUsers($idUsers)
    {
        $this->_idUsers = $idUsers;
    }
    
    public function setIdReserv($idReserv)
    {
        $this->_idReserv = $idReserv;
    }
    
    public function setIdClient($idClient)
    {
        $this->_idClient = $idClient;
    }
    
    public function setIdVol($idVol)
    {
        $this->_idVol = $idVol;
    }    
    
    public function setDateDepart($dateDepart)
    {
        $this->_dateDepart = $dateDepart;
    }
    
    public function setDateReserv($dateReserv)
    {
        $this->_dateReserv = $dateReserv;
    }
    
    public function setNbrReserv($nbrReserv)
    {
        $this->_nbrReserv = $nbrReserv;
    }
    
    public function jsonSerialize() {
        
        $json = array();
        foreach ($this as $key => $value) {
            $json[$key] = $value;
        }
        return json_encode($json);
    }
    
    
    
    
    
}
    

