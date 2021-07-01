<?php

class HFAuthorizeMusicDetailRequest extends HFRequest
{
    public $musicIds;

    function __construct(){
        $this->actionName('AuthorizeMusicDetail')
            ->method('POST')
            ->param(array('musicIds'));
    }

    public function musicIds($musicIds){
        $this->musicIds = $musicIds;
        return $this;
    }
}