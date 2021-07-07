<?php

class HFMemberSheetMusicRequest extends HFRequest
{
    private $sheetId;
    private $page;
    private $pageSize;
    public $timestamp;
    public $accessToken;

    function __construct(){
        $this->actionName('MemberSheetMusic')
            ->param(array('sheetId', 'page', 'pageSize', 'timestamp', 'accessToken'));
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

    public function timestamp($timestamp){
        $this->timestamp = $timestamp;
        return $this;
    }

    public function accessToken($accessToken){
        $this->accessToken = $accessToken;
        return $this;
    }


}