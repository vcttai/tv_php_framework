<?php

if (!defined('PATH_SYSTEM')) die ("Bad request!");

class Library_Controller extends TV_controller
{
    public function indexAction()
    {
        $this->library->load('upload');

        $this->library->upload->upload();
    }
}