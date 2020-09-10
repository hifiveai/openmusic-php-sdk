<?php

class HiFiveSearchMusicRequest extends HiFiveRequest {

    public $keyword;
    public $language;
    public $price;
    public $tagId;
    public $bpm;
    public $duration;
    public $page;
    public $pageSize;

    function __construct() {
        $this->actionName('SearchMusic')
            ->param(array('keyword', 'language', 'price',
                'tagId', 'bpm', 'duration',
                'page', 'pageSize'));
    }

    public function keyword($keyword) {
        $this->keyword = $keyword;
        return $this;
    }

    public function language($language) {
        $this->language = $language;
        return $this;
    }

    public function price($price) {
        $this->price = $price;
        return $this;
    }

    public function tagId($tagId) {
        $this->tagId = $tagId;
        return $this;
    }

    public function bpm($bpm) {
        $this->bpm = $bpm;
        return $this;
    }

    public function duration($duration) {
        $this->duration = $duration;
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