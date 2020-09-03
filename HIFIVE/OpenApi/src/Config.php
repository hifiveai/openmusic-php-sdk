<?php
/*
 * 配置
 */
include_once dirname(__FILE__) . DIRECTORY_SEPARATOR . '../autoload.php';

// config http proxy
define('HF_ENABLE_HTTP_PROXY', FALSE);
define('HF_HTTP_PROXY_IP', '127.0.0.1');
define('HF_HTTP_PROXY_PORT', '9000');