<?php

require_once (dirname(__FILE__) . '/lib/structure.php');

class Index extends Structure {
    
    public function __construct() {
        parent::__construct();
        $this->setActiveLink('Accueil');
    }
    
    public function buildContent() {
        ?>
        <p>
          
          Hello and wellcom to our interface 
          <br />
          <br />On this web-site you can find informations about :
          <br />- Level of charge
          <br />- Brigthnes of the sun
        </p>
        <p class="alert alert-info">Warrining! handsome project !! </p>
        <?php
    }
}

$page = new Index();
$page->setBreadCrumb('Accueil');
$page->start();

?>