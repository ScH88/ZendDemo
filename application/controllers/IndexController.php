<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction() {
        //Assign the title of this page as "Welcome to Real Autos" 
        $this->view->assign('title', 'Welcome to Real Autos!');
        //Prepend this page's title to the title of this site
        $this->view->headTitle($this->view->title, 'PREPEND');
    }
}

