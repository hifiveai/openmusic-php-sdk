<?php

/*
 * 请求基类
 */

abstract class HFRequest {

    private $clientId;
    private $acceptFormat = 'JSON';
    private $actionName;
    private $method = 'GET';
    private $version = 'v4.0.1';
    private $param = array();

    public function getClientId() {
        return $this->clientId;
    }

    public function clientId($clientId) {
        $this->clientId = $clientId;
        return $this;
    }

    public function getAcceptFormat() {
        return $this->acceptFormat;
    }

    public function getActionName() {
        return $this->actionName;
    }

    protected function actionName($actionName) {
        $this->actionName = $actionName;
        return $this;
    }

    protected function method($method) {
        $this->method = $method;
        return $this;
    }

    public function getMethod() {
        return $this->method;
    }

    public function getVersion() {
        return $this->version;
    }

    public function getParam() {
        $param = array();
        foreach ($this->param as $v) {
            $param[$v] = $this->$v;
        }
        return $param;
    }

    protected function param($param) {
        $this->param = $param;
        return $this;
    }
}