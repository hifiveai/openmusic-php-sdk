<?php

class HFOrderMusicRequest extends HFRequest {

    public $orderId;
    public $subject;
    public $language;
    public $audioFormat;
    public $audioRate;
    public $deadline;
    public $music;
    public $totalFee;
    public $remark;
    public $workId;

    function __construct() {
        $this->method('POST')
            ->actionName('OrderMusic')
            ->param(array('orderId', 'subject', 'language',
                'audioFormat', 'audioRate', 'deadline',
                'music', 'totalFee', 'remark',
                'workId'));
    }

    public function orderId($orderId) {
        $this->orderId = $orderId;
        return $this;
    }

    public function subject($subject) {
        $this->subject = $subject;
        return $this;
    }

    public function language($language) {
        $this->language = $language;
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

    public function deadline($deadline) {
        $this->deadline = $deadline;
        return $this;
    }

    public function music($music) {
        $this->music = $music;
        return $this;
    }

    public function totalFee($totalFee) {
        $this->totalFee = $totalFee;
        return $this;
    }

    public function remark($remark) {
        $this->remark = $remark;
        return $this;
    }

    public function workId($workId) {
        $this->workId = $workId;
        return $this;
    }
}