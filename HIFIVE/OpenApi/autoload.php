<?php

spl_autoload_register('Autoloader::autoload');

class Autoloader {

    private static $autoloadPathArray = array(
        'HIFIVE/OpenApi/src',
        'HIFIVE/OpenApi/src/Auth',
        'HIFIVE/OpenApi/src/Exception',
        'HIFIVE/OpenApi/src/Http',
        'HIFIVE/OpenApi/src/Profile',
        'HIFIVE/OpenApi/src/Request',
        'HIFIVE/OpenApi/src/Util',
    );

    public static function autoload($className) {
        $root = dirname(dirname(__DIR__));
        foreach (self::$autoloadPathArray as $map) {
            $file = $root . DIRECTORY_SEPARATOR . $map . DIRECTORY_SEPARATOR . $className . '.php';
            if (is_file($file)) {
                include_once $file;
                break;
            }
        }
    }

}
