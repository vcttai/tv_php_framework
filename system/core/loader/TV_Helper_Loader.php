<?php

/**
 * Class TV_Library_Loader
 * author Vcttai
 * version 1.0
 */
class TV_Helper_Loader
{
    protected $helper_suffix_name = '_Helper';

    public function load($helper)
    {
        require_once PATH_SYSTEM . '\\helper\\' . $helper . $this->helper_suffix_name . '.php';
    }
}