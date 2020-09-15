<?php

class HFBaseFavoriteRequest extends HFRequest {

    public $page;
    public $pageSize;

    function __construct() {
        $this->actionName('BaseFavorite')
            ->param(array('page', 'pageSize'));
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