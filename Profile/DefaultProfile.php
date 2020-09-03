<?php

/*
 * 身份认证
 */

class DefaultProfile implements HFProfile {

    private static $endpoint;
    private static $profile;
    private static $signer;
    private static $credential;

    private function __construct($endpoint, $credential) {
        self::$endpoint = $endpoint;
        self::$credential = $credential;
    }

    public static function build($endpoint, $appId, $appSecret) {
        $credential = new Credential($appId, $appSecret);
        self::$profile = new DefaultProfile($endpoint, $credential);
        return self::$profile;
    }

    public function getSigner() {
        if (null == self::$signer) {
            self::$signer = new HmacSha1Signer();
        }
        return self::$signer;
    }

    public function getCredential() {
        return self::$credential;
    }

    public static function getEndpoint() {
        return self::$endpoint;
    }
}