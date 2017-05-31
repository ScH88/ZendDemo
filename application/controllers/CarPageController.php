<?php

class CarPageController extends Zend_Controller_Action {    
    
    public function init() {
        
    }
    
    public function indexAction()   {
        //Assign the title of this page as "Cars For Sale"
        $this->view->assign('title', 'Cars For Sale');
        //Prepend this page's title to the title of this site
        $this->view->headTitle($this->view->title, 'PREPEND');
        //Instantiate a local database as an instance of the models directoy's Cars.php database
        $cars = new Application_Model_DbTable_Cars();
        //Set the cars in the table as the return value of the cars database's fetchAll() function
        $this->view->cars = $cars->fetchAll();
    }
    
    public function viewAction() {
        //Define a local ID by getting the posted "id" parameter value from the post request
        $id = (int) $this->_request->getParam('id');
        //Instantiate a local database as an instance of the models directoy's Cars.php database
        $cars = new Application_Model_DbTable_Cars();
        //Set a local value by calling table's fetchRow function, passing it the ID value
        $row = $cars->fetchRow($cars->select()->where('id = '. $id));
        //If the return value of the table's fetchRow function does not return a value
        if ($row == null) {
            //Redirect to the "file not found" page
            $this->_redirect("/file-not-found");
        //Otherwise
        } else {
            //Set a local value for this page's car by passing it the row value
            $this->view->car = $row;
            //Assign the title of this page as the car's make and model
            $this->view->assign('title', $row->make." ".$row->model);
            //Prepend this page's title to the title of this site
            $this->view->headTitle($this->view->title, 'PREPEND');
        }
        
    }
}

