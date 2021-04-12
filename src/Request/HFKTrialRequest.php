<?php

class HFKTrialRequest extends HFRequest
{
    public $musicId;

    function __construct()
    {
        $this->method('GET')
            ->actionName('KTrial')
            ->param(array('musicId'));
    }

    public function musicId($musicId){
        $this->musicId = $musicId;
        return $this;
    }

}