<?php

/*
 * 签名接口
 */

interface Signer {

    public function signString($header, $method, $param, $appSecret);
}