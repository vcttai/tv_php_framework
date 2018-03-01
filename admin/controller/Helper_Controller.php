<?php

class Helper_Controller extends TV_Controller
{
    public function indexAction()
    {
        // Load heloer
        $this->helper->load('string');

        // Gọi đến hàm string_to_int
        echo string_to_int('nhungdongcodevui.com');
    }
}