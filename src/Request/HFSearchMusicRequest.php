<?php

class HFSearchMusicRequest extends HFRequest {

    public $keyword;
    public $language;
    public $priceFromCent;
    public $priceToCent;
    public $bpmFrom;
    public $bpmTo;
    public $durationFrom;
    public $durationTo;
    public $tagIds;
    public $searchFiled;
    public $searchSmart;
    public $page;
    public $pageSize;

    function __construct() {
        $this->method('POST')
            ->actionName('SearchMusic')
            ->param(array('keyword', 'language', 'priceFromCent',
                'priceToCent', 'bpmFrom', 'bpmTo',
                'durationFrom', 'durationTo', 'tagIds', 'searchFiled', 'searchSmart',
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

    public function priceFromCent($priceFromCent) {
        $this->priceFromCent = $priceFromCent;
        return $this;
    }

    public function priceToCent($priceToCent) {
        $this->priceToCent = $priceToCent;
        return $this;
    }

    public function bpmFrom($bpmFrom) {
        $this->bpmFrom = $bpmFrom;
        return $this;
    }

    public function bpmTo($bpmTo) {
        $this->bpmTo = $bpmTo;
        return $this;
    }

    public function durationFrom($durationFrom) {
        $this->durationFrom = $durationFrom;
        return $this;
    }

    public function durationTo($durationTo) {
        $this->durationTo = $durationTo;
        return $this;
    }

    public function tagIds($tagIds) {
        $this->tagIds = $tagIds;
        return $this;
    }

    public function searchFiled($searchFiled){
        $this->searchFiled = $searchFiled;
        return $this;
    }

    public function searchSmart($searchSmart){
        $this->searchSmart = $searchSmart;
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