<?php

define('PATH_SYSTEM', __DIR__ . '\\system');
define('PATH_APPLICATION', __DIR__ . '\\admin');

require_once(PATH_SYSTEM . '/config/config.php');
include_once PATH_SYSTEM . '\\core\\TV_Common.php';

$tv_common = new TV_Common($_GET);
$tv_common->load();
