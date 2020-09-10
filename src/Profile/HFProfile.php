<?php

/*
 * 身份认证接口
 */

interface HFProfile {

    public function getSigner();

    public function getCredential();
}