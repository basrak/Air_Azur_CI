<?php

namespace Entity;

/**
 * @Entity
 * @Table(name="users")
 */

class Users implements JsonSerializable
{
    /**
     * @Id
     * @Column(type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     */
    private $_idUsers;
    
    /**
     * @Column(type="string", length=15, nullable=false)
     */
    private $_login;
    
    /**
     * @Column(type="string", length=20, nullable=false)
     */
    private $_mdp;
    
    /**
     * @Column(type="string", length=10, nullable=false)
     */
    private $_uStatus;
    
    /**
     * @Column(type="string", length=30, nullable=true)
     */  
    private $_nomAgence;
    
     /**
     * @Column(type="string", length=50, nullable=true)
     */  
    private $_adrAgence;
    
     /**
     * @Column(type="int", length=5, nullable=true)
     */  
    private $_CPAgence;
     /**
     * @Column(type="string", length=30, nullable=true)
     */  
    
    private $_villeAgence;
    
     /**
     * @Column(type="string", length=15, nullable=true)
     */  
    private $_telAgence;
    
     /**
     * @Column(type="string", length=30, nullable=true)
     */  
    private $_mailAgence;
    
                
    //Getters
    public function getIdUsers()  { return $this->_idUsers; }
    public function getLogin()  { return $this->_login; }
    public function getMdp()  { return $this->_mdp; }
    public function getUStatus()  { return $this->_uStatus; }
    public function getCodeAgence()  { return $this->_codeAgence; }
    public function getNomAgence()  { return $this->_nomAgence; }
    public function getAdrAgence()  { return $this->_adrAgence; }
    public function getCPAgence()  { return $this->_CPAgence; }
    public function getVilleAgence()  { return $this->_villeAgence; }
    public function getTelAgence()  { return $this->_telAgence; }
    public function getMailAgence()  { return $this->_mailAgence; }
    
    //Setters    
    public function setIdUsers($idUsers)
    {
        $this->_idUsers = $idUsers;
    }
    
    public function setLogin($login)
    {
        $this->_login = $login;
    }
    
    public function setMdp($mdp)
    {
        $this->_mdp = $mdp;
    }
    
    public function setUStatus($uStatus)
    {
        $this->_uStatus = $uStatus;
    }

    public function setCodeAgence($codeAgence)
    {
        $this->_codeAgence = $codeAgence;
    }
    
    public function setNomAgence($nomAgence)
    {
        $this->_nomAgence = $nomAgence;
    }
    
    public function setadrAgence($adrAgence)
    {
        $this->_adrAgence = $adrAgence;
    }
    
    public function setCPAgence($CPAgence)
    {
        $this->_CPAgence = $CPAgence;
    }
    
    public function setVilleAgence($villeAgence)
    {
        $this->_villeAgence = $villeAgence;
    }
    
    public function setTelAgence($telAgence)
    {
        $this->_telAgence = $telAgence;
    }
    
    public function setMailAgence($mailAgence)
    {
        $this->_mailAgence = $mailAgence;
    }
    
    public function jsonSerialize() {
        
        $json = array();
        foreach ($this as $key => $value) {
            $json[$key] = $value;
        }
        return json_encode($json);
    }
}
    
    
    
    
    
