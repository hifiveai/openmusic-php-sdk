<?php

class HFTrafficHQListenSliceRequest extends HFRequest {

    public $musicId;
    public $audioFormat;
    public $audioRate;
    public $auditionBegin;
    public $auditionEnd;
    public $isMixed;

    function __construct() {
        $this->actionName('TrafficHQListenSlice')
            ->param(array('musicId', 'audioFormat', 'audioRate',
                'auditionBegin', 'auditionEnd', 'isMixed'));
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

    public function auditionBegin($auditionBegin) {
        $this->auditionBegin = $auditionBegin;
        return $this;
    }

    public function auditionEnd($auditionEnd) {
        $this->auditionEnd = $auditionEnd;
        return $this;
    }

    public function isMixed($isMixed) {
        $this->isMixed = $isMixed;
        return $this;
    }
}