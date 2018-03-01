<?php

/**
 * Class TV_View_Loader
 * author Vcttai
 * version 1.0
 */
class TV_View_Loader
{
    private $__content = array();

    public function load($view, $data = [])
    {
        extract($data);

        //Get content as var instead of printing
        ob_start();
        require_once PATH_APPLICATION . '\\view\\' . $view . '.php';
        $content = ob_get_contents();
        ob_end_clean();

//        $content = require_once PATH_APPLICATION . '\\view\\' . $view . '.php';

        $this->__content[] = $content;
    }

    public function show()
    {
        foreach ($this->__content as $html) {
            echo $html;
        }
    }
}