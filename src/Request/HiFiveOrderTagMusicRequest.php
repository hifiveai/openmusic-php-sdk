<?php

class HiFiveOrderTagMusicRequest extends HiFiveRequest {

    public $language;
    public $tagId;
    public $page;
    public $pageSize;

    function __construct() {
        $this->actionName('OrderTagMusic')
            ->param(array('language', 'tagId', 'page',
                'pageSize'));
    }

    public function language($language) {
        $this->language = $language;
        return $this;
    }

    public function tagId($tagId) {
        $this->tagId = $tagId;
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
}