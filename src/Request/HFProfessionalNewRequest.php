<?php

class HFProfessionalNewRequest extends HFRequest {

    public $page;
    public $pageSize;

    function __construct() {
        $this->actionName('ProfessionalHot')
            ->param(array('page',
                'pageSize'));
    }

    public function page($page) {
        $this->page = $page;
        return $this;
    }

    public function pageSize($size) {
        $this->pageSize = $size;
        return $this;
    }

}