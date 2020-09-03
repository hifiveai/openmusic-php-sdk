<?php

class HFTrafficTagSheetRequest extends HFRequest {

    public $tagId;
    public $recoNum;
    public $language;
    public $type;

    function __construct() {
        $this->actionName('TrafficTagSheet')
            ->param(array('tagId', 'recoNum', 'language',
                'type'));
    }

    public function tagId($tagId) {
        $this->tagId = $tagId;
        return $this;
    }

    public function recoNum($recoNum) {
        $this->recoNum = $recoNum;
        return $this;
    }

    public function language($language) {
        $this->language = $language;
        return $this;
    }

    public function type($type) {
        $this->type = $type;
        return $this;
    }
}