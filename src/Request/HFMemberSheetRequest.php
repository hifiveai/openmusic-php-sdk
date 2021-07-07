<?php

class HFMemberSheetRequest extends HFRequest
{
    private $memberOutId;
    private $page;
    private $pageSize;

    function __construct(){
        $this->actionName('MemberSheet')
            ->param(array('memberOutId', 'page', 'pageSize'));
    }

    public function memberOutId($memberOutId){
        $this->memberOutId = $memberOutId;
        return $this;
    }

    public function page($page){
        $this->page = $page;
        return $this;
    }

    public function pageSize($pageSize){
        $this->pageSize = $pageSize;
        return $this;
    }

}