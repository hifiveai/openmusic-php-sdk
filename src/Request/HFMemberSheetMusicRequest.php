<?php

class HFMemberSheetMusicRequest extends HFRequest
{
    private $sheetId;
    private $page;
    private $pageSize;

    function __construct(){
        $this->actionName('MemberSheetMusic')
            ->param(array('sheetId', 'page', 'pageSize'));
    }

    public function sheetId($sheetId){
        $this->sheetId = $sheetId;
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