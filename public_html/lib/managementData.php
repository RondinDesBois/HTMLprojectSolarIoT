<?php

require (dirname(__FILE__) .'/../common/data.php');

class ManagementData {

    private $_listData;

    public function addData($anIP, $aName, $aValue) {
        //$this->_listData[] = new Data($anIP, $aPort, $aName);
        $ah = new Data();
        $ah->setIP($anIP);
        $ah->setName($aName);
        $ah->setValue($aValue);
        $this->_listData[] = $ah;
    }

    public function buildDataToHTML() {
        foreach ($this->_listData as $Data) {
            ?>
            <tr>
                <td><?php echo $Data->getName(); ?></td>
                <td><?php echo $Data->getIP(); ?></td>
                <td><?php echo $Data->getValue(); ?></td>
            </tr>
            <?php  
        }
    }
}

?>