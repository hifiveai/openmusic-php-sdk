<?php

class HFAuthorizeMusicRequest extends HFRequest
{
    public $page;
    public $pageSize;

    function __construct() {
        $this->actionName('AuthorizeMusic')
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