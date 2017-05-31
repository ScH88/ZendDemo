<?php

class Application_Model_DbTable_Cars extends Zend_Db_Table_Abstract {
    //Name for the "car" table from the "Real Autos" MySQL database
    protected $_name = 'car';

    public function getCar($id) {
        
        //Define a row by passing the ID to this instance's fetchRow function
        $row = $this->fetchRow('id = ' . $id);
        //If the fecthRow function returns a null value
        if (!$row) { 
            //Throw a new exception
            throw new exception("Could not find row $id");
        }
        //Return the row, converted to an array
        return $row->toArray();
    }
}

