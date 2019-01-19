<?php

require_once (dirname(__FILE__) . '/lib/structure.php');
require_once (dirname(__FILE__) . '/lib/managementData.php');

class PageData extends Structure {
    private $_managementData = null;

    
    public function __construct() {
        parent::__construct();
        $this->initializeData();
        $this->setActiveLink('Data');
    }
    
    protected function buildHTMLHead() {
        parent::buildHTMLHead();
        echo '<link rel="stylesheet" type="text/css" href="css\Data.css" media="all" />';
    }

    private function initializeData() {
        $monfichier = fopen('e.txt', 'r+');
		$debug = fopen('debug.txt', 'r+');
		
        $this->_managementData = new ManagementData();

        $this->_managementData->addData('/', 'Brightnes Sensor', fgets($monfichier));
        $this->_managementData->addData('/', 'Charge level', 'coming soon');
		$this->_managementData->addData('/', 'DEBUG', fgets($debug));
		fclose($monfichier);
    }

    public function buildContent() {
        ?>
        <p>
            Here is the list of the systems sensors :
        </p>
        <table id="myTab" class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Adresse IP</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <?php $this->_managementData->buildDataToHTML(); ?>
            </tbody>
        </table>
        <?php
    }

}
$page = new PageData();
$page->setBreadCrumb('Data');
$page->start();

?>