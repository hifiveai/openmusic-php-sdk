<?php

class HFAuthorizeMusicDetailRequest extends HFRequest
{
    public $musicIds;

    function __construct(){
        $this->actionName('')
            ->param(array('musicIds'));
    }

    public function musicIds($musicIds){
        $this->musicIds = $musicIds;
        return $this;
    }
}