<?php

class HFUGCTrialRequest extends HFRequest
{
    public $musicId;

    function __construct()
    {
        $this->method('GET')
            ->actionName('UGCTrial')
            ->param(array('musicId'));
    }

    public function musicId($musicId){
        $this->musicId = $musicId;
        return $musicId;
    }
}