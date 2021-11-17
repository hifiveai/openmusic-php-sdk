<?php

spl_autoload_register(function ($class) {
    $root = dirname(__FILE__);
    $dirs = array(
        'src',
        'src/Auth',
        'src/Exception',
        'src/Http',
        'src/Profile',
        'src/Request',
        'src/Util',
    );

    foreach ($dirs as $dir) {
        $path = $root . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $class . '.php';
        if (file_exists($path)) {
            include_once($path);
            return;
        }
    }
});
