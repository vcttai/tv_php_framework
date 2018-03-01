<?php

if (!defined('PATH_SYSTEM')) die ('Bad request');

class View_Controller extends TV_Controller
{
    public function indexAction()
    {
        $data = array(
            'title' => 'Chào mừng các bạn đến với nhungdongcodevui.com'
        );

        // Load view
        $this->view->load('view', $data);

        // Show view
        $this->view->show();
    }
}