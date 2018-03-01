<?php

if (!defined('PATH_SYSTEM')) die ("Bad request!");

/**
 * @author Vcttai
 * @version 1.0
 */
class TV_controller
{
    protected $view = null;
    protected $library = null;
    protected $helper = null;
    protected $config = null;

    function __construct()
    {
        require_once PATH_SYSTEM . '\\core\\loader\\TV_Config_Loader.php';
        $this->config = new TV_Config_Loader();
        $this->config->load('config');

        require_once PATH_SYSTEM . '\\core\\loader\\TV_Library_Loader.php';
        $this->library = new TV_Library_Loader();

        require_once PATH_SYSTEM . '\\core\\loader\\TV_Helper_Loader.php';
        $this->helper = new TV_Helper_Loader();

        require_once PATH_SYSTEM . '\\core\\loader\\TV_View_Loader.php';
        $this->view = new TV_View_Loader();
    }

}
