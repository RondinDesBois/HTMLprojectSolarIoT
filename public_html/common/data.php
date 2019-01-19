<?php

class Data {
    private $_ip;
    private $_value;
    private $_name;

    // public function __construct($anIP, $aPort, $aName) {
    //  $this->setIP($anIP);
    //  $this->setPort($aPort);
    //  $this->setName($aName);
    // }

    public function getIP() {
        return $this->_ip;
    }
    public function getName() {
        return $this->_name;
    }
    public function getValue() {
        return $this->_value;
    }

    public function setIP($anIP) {
        $this->_ip = $anIP;
    }
    public function setName($aName) {
        $this->_name = $aName;
    }
    public function setValue($aValue) {
        $this->_value = $aValue;
    }

}

?>