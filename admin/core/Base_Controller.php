<?php

if (!defined('PATH_SYSTEM')) die ('Bad request');

class Base_Controller extends TV_controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function __destruct()
    {
        $this->view->show();
    }

    public function loadHeader()
    {

    }

    public function loadFooter()
    {

    }
}