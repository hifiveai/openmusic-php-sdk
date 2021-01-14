<?php

class HFTrialRequest extends HFRequest {

    public $musicId;

    function __construct() {
        $this->actionName('Trial')
            ->param(array('musicId'));
    }

    public function musicId($musicId) {
        $this->musicId = $musicId;
        return $this;
    }

}