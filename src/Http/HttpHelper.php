<?php

/*
 * http方法
 */

class HttpHelper {

    public static $connectTimeout = 30000; //30 second
    public static $readTimeout = 80000; //80 second

    public static function curl($url, $method = 'GET', $param = null, $headers = null) {
        $paramNoEmpty = Helper::arrNoEmpty($param);
        if ('GET' == $method && $paramNoEmpty) {
            $url .= '?' . Helper::buildQuery($param, true);
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, self::$readTimeout);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, self::$connectTimeout);
        if (strlen($url) > 5 && strtolower(substr($url, 0, 5)) == 'https') {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }
        if ('POST' == $method) {
            curl_setopt($ch, CURLOPT_POST, 1);
            if ($paramNoEmpty) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, Helper::buildQuery($param, true));
            }
        }
        if (Helper::arrNoEmpty($headers)) {
            $httpHeaders = Helper::httpHeaders($headers);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpHeaders);
        }
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            throw new OpenApiException('Speicified endpoint or uri is invalid.', 'ServerUnreachable');
        }
        curl_close($ch);
        return $response;
    }
}