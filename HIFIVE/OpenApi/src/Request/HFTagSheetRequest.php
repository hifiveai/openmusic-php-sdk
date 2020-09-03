<?php

class HFTagSheetRequest extends HFRequest {

    public $tagId;
    public $type;
    public $recoNum;
    public $language;

    function __construct() {
        $this->actionName('TagSheet')
            ->param(array('tagId', 'type', 'recoNum',
                'language'));
    }

    public function tagId($tagId) {
        $this->tagId = $tagId;
        return $this;
    }

    public function type($type) {
        $this->type = $type;
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
}