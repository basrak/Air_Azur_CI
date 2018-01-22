<?php
namespace Entity;

/**
 * @Entity
 * @Table(name="users")
 */
class Client implements JsonSerializable {

    /**
     * @Id
     * @Column(type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     */
    private $_idClient;
    /**
     * @NOMCLIENT
     * @Column(type="string", lenght=30, nullable=true)
     */
    private $_nomClient;
    /**
     * @PRENOMCLIENT
     * @Column(type="string", lenght=30, nullable=true)
     */
    private $_prenomClient;
    /**
     * @ADRCLIENT
     * @Column(type="integer", lenght=50, nullable=true)
     */
    private $_adrClient;
    /**
     * @CPCLIENT
     * @Column(type="integer", lenght=5, nullable=true)
     */
    private $_CPClient;
    /**
     * @VILLECLIENT
     * @Column(type="string", lenght=30, nullable=true)
     */
    private $_villeClient;
    /**
     * @TELCLIENT
     * @Column(type="string", lenght=15, nullable=true)
     */
    private $_telClient;
    /**
     * @MAILCLIENT
     * @Column(type="string", lenght=30, nullable=true)
     */
    private $_mailClient;


    //Getters
    public function getIdClient() {
        return $this->_idClient;
    }

    public function getNomClient() {
        return $this->_nomClient;
    }

    public function getPrenomClient() {
        return $this->_prenomClient;
    }

    public function getAdrClient() {
        return $this->_adrClient;
    }

    public function getCPClient() {
        return $this->_CPClient;
    }

    public function getVilleClient() {
        return $this->_villeClient;
    }

    public function getTelClient() {
        return $this->_telClient;
    }

    public function getMailClient() {
        return $this->_mailClient;
    }

    //Setters
    public function setIdClient($idClient) {
        $this->_idClient = $idClient;
    }

    public function setNomClient($nomClient) {
        $this->_nomClient = $nomClient;
    }

    public function setPrenomClient($prenomClient) {
        $this->_prenomClient = $prenomClient;
    }

    public function setAdrClient($adrClient) {
        $this->_adrClient = $adrClient;
    }

    public function setCPClient($CPClient) {
        $this->_CPClient = $CPClient;
    }

    public function setVilleClient($villeClient) {
        $this->_villeClient = $villeClient;
    }

    public function setTelClient($telClient) {
        $this->_telClient = $telClient;
    }

    public function setMailClient($mailClient) {
        $this->_mailClient = $mailClient;
    }

    public function jsonSerialize() {
        
        $json = array();
        foreach ($this as $value) {
            $json[] = $value;
        }
        return json_encode((object)$json, true);
    }

}
