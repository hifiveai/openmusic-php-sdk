<?php

class HFOrderTrialRequest extends HFRequest
{
    public $musicId;

    function __construct() {
        $this->actionName('OrderTrial')
            ->param(array('musicId'));
    }

    public function musicId($musicId) {
        $this->musicId = $musicId;
        return $this;
    }
}