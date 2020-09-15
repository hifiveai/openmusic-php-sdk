<?php

class HFTrafficListenSliceRequest extends HFRequest {

    public $musicId;
    public $audioFormat;
    public $audioRate;
    public $isMixed;
    public $auditionBegin;
    public $auditionEnd;

    function __construct() {
        $this->actionName('TrafficListenSlice')
            ->param(array('musicId', 'audioFormat', 'audioRate',
                'isMixed', 'auditionBegin', 'auditionEnd'));
    }

    public function musicId($musicId) {
        $this->musicId = $musicId;
        return $this;
    }

    public function audioFormat($audioFormat) {
        $this->audioFormat = $audioFormat;
        return $this;
    }

    public function audioRate($audioRate) {
        $this->audioRate = $audioRate;
        return $this;
    }

    public function isMixed($isMixed) {
        $this->isMixed = $isMixed;
        return $this;
    }

    public function auditionBegin($auditionBegin) {
        $this->auditionBegin = $auditionBegin;
        return $this;
    }

    public function auditionEnd($auditionEnd) {
        $this->auditionEnd = $auditionEnd;
        return $this;
    }
}