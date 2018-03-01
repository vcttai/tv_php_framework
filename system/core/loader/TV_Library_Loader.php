<?php

if (!defined('PATH_SYSTEM')) die ("Bad request!");

/**
 * Class TV_Library_Loader
 * author Vcttai
 * version 1.0
 */
class TV_Library_Loader
{
    protected $library_suffix_name = '_Library';

    public function load($library, $args = [])
    {
        if(empty($this->{$library}))
        {
            $library_class_name = ucfirst($library) .$this->library_suffix_name;
            require_once PATH_SYSTEM . '\\library\\' . $library_class_name . '.php';

            if(class_exists($library_class_name)){
                $this->{$library} = new $library_class_name($args);
            }
        }
    }
}