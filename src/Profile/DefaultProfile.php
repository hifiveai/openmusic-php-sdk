<?php

/*
 * 身份认证
 */

class DefaultProfile implements HFProfile {

    private $endpoint;
    private $signer;
    private $credential;
    private $userToken;

    private function __construct($endpoint, $credential) {
        $this->endpoint = $endpoint;
        $this->credential = $credential;
    }

    public static function build($endpoint, $appId, $appSecret, $userToken = '') {
        $credential = new Credential($appId, $appSecret);

        $profile = new DefaultProfile($endpoint, $credential);
        $profile->userToken = $userToken;
        return $profile;
    }

    public function getSigner() {
        if (null == $this->signer) {
            $this->signer = new HmacSha1Signer();
        }
        return $this->signer;
    }

    public function getCredential() {
        return $this->credential;
    }

    public function getEndpoint() {
        return $this->endpoint;
    }

    public function token($token) {
        $this->userToken = $token;
    }

    public function getToken() {
        return $this->userToken;
    }
}