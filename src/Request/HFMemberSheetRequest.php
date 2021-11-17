<?php

class HFMemberSheetRequest extends HFRequest
{
    public $memberOutId;
    public $page;
    public $pageSize;
    public $timestamp;
    public $accessToken;

    function __construct(){
        $this->actionName('MemberSheet')
            ->param(array('memberOutId', 'page', 'pageSize', 'timestamp', 'accessToken'));
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

    public function timestamp($timestamp){
        $this->timestamp = $timestamp;
        return $this;
    }

    public function accessToken($accessToken){
        $this->accessToken = $accessToken;
        return $this;
    }

}