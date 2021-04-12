<?php

class Helper {

    public static function randomTron() {
        $result = '';
        $char_set = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $length = strlen($char_set) - 1;
        for ($i = 0; $i < 32; $i++) {
            $result .= $char_set{rand(0, $length)};
        }
        return $result;
    }

    public static function milliSecond() {
        list($t1, $t2) = explode(' ', microtime());
        return (float)sprintf('%.0f', (floatval($t1) + floatval($t2)) * 1000);
    }

    public static function buildQuery($param, $encode = false) {
        $res = array();
        if ($encode) {
            foreach ($param as $k => $v) {
                if (null === $v || '' === $v) {
                    continue;
                }
                if (is_array($v)) {
                    $v = implode(',', $v);
                }
                array_push($res, $k . '=' . urlencode($v));
            }
        } else {
            foreach ($param as $k => $v) {
                if (null === $v || '' === $v) {
                    continue;
                }
                if (is_array($v)) {
                    $v = implode(',', $v);
                }
                array_push($res, $k . '=' . $v);
            }
        }
        return implode('&', $res);
    }

    public static function arrNoEmpty($array) {
        return is_array($array) && 0 < count($array);
    }

    public static function httpHeaders($headers) {
        $httpHeader = array();
        foreach ($headers as $key => $value) {
            array_push($httpHeader, $key . ':' . $value);
        }
        return $httpHeader;
    }
}