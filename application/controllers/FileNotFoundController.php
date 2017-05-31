<?php

class FileNotFoundController extends Zend_Controller_Action
{

    public function init() {
        /* Initialize action controller here */
    }

    public function indexAction() {
        //Assign the title of this page as "404 File Not Found"
        $this->view->assign('title', '404 File Not Found');
        //Prepend this page's title to the title of this site
        $this->view->headTitle($this->view->title, 'PREPEND');   
    }


}

