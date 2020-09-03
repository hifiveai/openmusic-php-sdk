<?php

/*
 * http方法
 */

class HttpHelper {

    public static $connectTimeout = 30000; //30 second
    public static $readTimeout = 80000; //80 second

    public static function curl($url, $method = 'GET', $param = null, $headers = null) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        if (HF_ENABLE_HTTP_PROXY) {
            curl_setopt($ch, CURLOPT_PROXYAUTH, CURLAUTH_BASIC);
            curl_setopt($ch, CURLOPT_PROXY, HF_HTTP_PROXY_IP);
            curl_setopt($ch, CURLOPT_PROXYPORT, HF_HTTP_PROXY_PORT);
            curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
        }
        $paramNoEmpty = Helper::arrNoEmpty($param);
        if ('GET' == $method && $paramNoEmpty) {
            $url .= '?' . Helper::buildQuery($param, true);
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, self::$readTimeout);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, self::$connectTimeout);
        if (strlen($url) > 5 && strtolower(substr($url, 0, 5)) == 'https') {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }
        if (Helper::arrNoEmpty($headers)) {
            $httpHeaders = Helper::httpHeaders($headers);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpHeaders);
        }
        if ('POST' == $method && $paramNoEmpty) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
        }
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            throw new OpenApiException('Speicified endpoint or uri is invalid.', 'ServerUnreachable');
        }
        curl_close($ch);
        return $response;
    }
}