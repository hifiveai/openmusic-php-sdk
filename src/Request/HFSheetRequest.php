<?php

class HFSheetRequest extends HFRequest {

    public $recoNum;
    public $language;
    public $page;
    public $pageSize;
    public $tagId;
    public $tagFilter;

    function __construct() {
        $this->actionName('Sheet')
            ->param(array('recoNum', 'language',
                'page', 'pageSize','tagId','tagFilter'));
    }

    public function recoNum($recoNum) {
        $this->recoNum = $recoNum;
        return $this;
    }

    public function language($language) {
        $this->language = $language;
        return $this;
    }

    public function page($page) {
        $this->page = $page;
        return $this;
    }

    public function pageSize($pageSize) {
        $this->pageSize = $pageSize;
        return $this;
    }

    public function tagId($tagId){
        $this->tagId = $tagId;
        return $this;
    }

    public function tagFilter($tagFilter){
        $this->tagFilter = $tagFilter;
        return $this;
    }


}