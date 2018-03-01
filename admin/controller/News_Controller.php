<?php

if (!defined('PATH_SYSTEM')) die ('Bad request');

class News_Controller extends TV_controller
{
    public function indexAction()
    {
        // Lấy config có key là csrf_token_name
        echo '<h3>Token: csrf_token_name: ' . $this->config->getConfigValue('csrf_token_name') . '</h3>';

        // Thay đổi giá trị cho csrf_token_name
        $this->config->setConfigValue('csrf_token_name', 'new_token');
        echo '<h3>Token: csrf_token_name (changed): ' . $this->config->getConfigValue('csrf_token_name') . '</h3>';

        // Tạo cấu hình mới tên website_name
        $this->config->setConfigValue('website_name', 'nhungdongcodevui.com');
        echo '<h3>key website_name: ' . $this->config->getConfigValue('website_name') . '</h3>';
    }

    public function detailAction()
    {
        echo '<h1>Detail Action.</h1>';
    }
}