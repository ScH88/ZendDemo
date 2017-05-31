<?php

class WeBuyCarsController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()   {
        //Assign the title of this page as "We Buy Cars" 
        $this->view->assign('title', 'We Buy Cars');
        //Prepend this page's title to the title of this site
        $this->view->headTitle($this->view->title, 'PREPEND');
    }


}

