<?php

/*
 * sdk内部异常
 */

class OpenApiException extends Exception {
    
    function __construct($errorMessage, $errorCode) {
        parent::__construct($errorMessage);
        $this->errorMessage = $errorMessage;
        $this->errorCode = $errorCode;
    }

    private $errorCode;
    private $errorMessage;

    public function getErrorCode() {
        return $this->errorCode;
    }

    public function setErrorCode($errorCode) {
        $this->errorCode = $errorCode;
    }

    public function getErrorMessage() {
        return $this->errorMessage;
    }

    public function setErrorMessage($errorMessage) {
        $this->errorMessage = $errorMessage;
    }
}