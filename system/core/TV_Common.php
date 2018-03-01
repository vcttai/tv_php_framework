<?php

if (!defined('PATH_SYSTEM')) die ("Bad request!");

require_once PATH_SYSTEM . '/config/config.php';

class TV_Common
{
    protected $global_params;

    protected $controller_path = PATH_APPLICATION . '\\controller\\';
    protected $controller_suffix_name = '_Controller';
    protected $action_suffix_name = 'Action';

    function __construct($global_params)
    {
        $this->global_params = $global_params;
    }

    private function getController()
    {
        return $this->global_params['c'] ?? CONTROLLER_DEFAULT;
    }

    private function getAction()
    {
        return $this->global_params['a'] ?? ACTION_DEFAULT;
    }

    public function load()
    {
        require_once PATH_SYSTEM . '/core/TV_Controller.php';

        //Load Base Controller
        if (file_exists(PATH_APPLICATION . '\\core\\Base_Controller.php')){
            include_once PATH_APPLICATION . '\\core\\Base_Controller.php';
        }

        $controller = $this->getController();
        $action = $this->getAction();

        $controller_name = ucfirst(strtolower($controller)) . $this->controller_suffix_name;
        $controller_path = $this->controller_path . $controller_name . '.php';
        $action = strtolower($action) . $this->action_suffix_name;

        if (!file_exists($controller_path)) {
            die ('Controller file is not exist!');
        }

        require_once "$controller_path";
        if (!class_exists($controller_name)) {
            die ('Controller is not exist!');
        }

        $controllerObject = new $controller_name();

        if (!method_exists($controllerObject, $action)) {
            die ('Invalid action!');
        }

        $controllerObject->{$action}();
    }
}