<?php

/*
 * 签名接口实现
 */

class HmacSha1Signer implements Signer {

    public function signString($header, $method, $param, $appSecret) {
        $headerStr = $this->headerStr($header, $method);
        $paramStr = $this->paramStr($param);
        $signStr = $paramStr ? ($paramStr . '&' . $headerStr) : $headerStr;
        $hash = hash_hmac('sha1', base64_encode($signStr), $appSecret, true);
        return strtoupper(md5($hash));
    }

    private function headerStr($header, $method) {
        $headerVal = array_values($header);
        array_unshift($headerVal, $method);
        return base64_encode(implode(' ', $headerVal));
    }

    private function paramStr($param) {
        ksort($param);
        return Helper::buildQuery($param);
    }
}