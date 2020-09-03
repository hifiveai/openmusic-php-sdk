<?php

/*
 * 身份认证
 */

class Credential {

    private $appId;
    private $appSecret;

    function __construct($appId, $appSecret) {
        $this->appId = $appId;
        $this->appSecret = $appSecret;
    }

    public function getAppId() {
        return $this->appId;
    }

    public function getAppSecret() {
        return $this->appSecret;
    }
}
