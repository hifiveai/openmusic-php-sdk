<?php
/*
 * 自动包含
 */
spl_autoload_register('Autoloader::autoload');

class Autoloader {

    private static $autoloadPathArray = array(
        'hifive-openapi-php-sdk',
        'hifive-openapi-php-sdk/Util',
        'hifive-openapi-php-sdk/Auth',
        'hifive-openapi-php-sdk/Http',
        'hifive-openapi-php-sdk/Profile',
        'hifive-openapi-php-sdk/Exception',
        'hifive-openapi-php-sdk/Request',
    );

    public static function autoload($className) {
        foreach (self::$autoloadPathArray as $path) {
            $file = dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . $path . DIRECTORY_SEPARATOR . $className . '.php';
            $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
            if (is_file($file)) {
                include_once $file;
                break;
            }
        }
    }

    public static function addAutoloadPath($path) {
        array_push(self::$autoloadPathArray, $path);
    }
}
