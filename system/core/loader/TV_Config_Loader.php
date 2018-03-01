<?php

/**
 * Class TV_Config_Loader
 * author Vcttai
 * version 1.0
 */
class TV_Config_Loader
{
    protected $config = array();

    public function load($config)
    {
        $config_file = PATH_APPLICATION . '\\config\\' . $config . '.php';

        if(file_exists($config_file))
        {
            $config = require_once "$config_file";
            if ( isset($config) && !empty($config)){
                foreach ($config as $key => $item)
                {
                    $this->config[$key] = $item;
                }
            }
            return TRUE;
        }
        return FALSE;
    }

    public function getConfigValue($key, $default_value = null)
    {
        return $this->config[$key] ?? $default_value;
    }

    public function setConfigValue($key, $value)
    {
        $this->config[$key] = $value;
    }
}