<?php

class HFTrafficReportListenRequest extends HFRequest
{
    public $musicId;
    public $duration;
    public $audioFormat;
    public $audioRate;
    public $timestamp;

    function __construct()
    {
        $this->method('POST')
            ->actionName('TrafficReportListen')
            ->param(array('musicId', 'duration',
                'audioFormat', 'audioRate', 'timestamp'));
    }

    public function musicId($musicId){
        $this->musicId = $musicId;
        return $this;
    }

    public function duration($duration){
        $this->duration = $duration;
        return $this;
    }

    public function audioFormat($audioFormat){
        $this->audioFormat = $audioFormat;
        return $this;
    }

    public function audioRate($audioRate){
        $this->audioRate = $audioRate;
        return $this;
    }

    public function timestamp($timestamp){
        $this->timestamp = $timestamp;
        return $this;
    }

}