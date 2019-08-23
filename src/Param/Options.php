<?php

namespace Param;

class Options {

    private $terminalId;
    private $username;
    private $password;
    private $guid;
    private $apiUrl;
    private $apiCardUrl;

    public function getTerminalId() {
        return $this->terminalId;
    }

    public function setTerminalId($terminalId) {
        $this->terminalId = $terminalId;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getGuid() {
        return $this->guid;
    }

    public function setGuid($guid) {
        $this->guid = $guid;
    }

    public function getApiUrl() {
        return $this->apiUrl;
    }

    public function setApiUrl($apiUrl) {
        $this->apiUrl = $apiUrl;
    }

    public function getApiCardUrl() {
        return $this->apiCardUrl;
    }

    public function setApiCardUrl($apiCardUrl) {
        $this->apiCardUrl = $apiCardUrl;
    }

    public function get() {
        $stdClass = new \stdClass();
        $stdClass->GUID = $this->getGuid();
        $stdClass->G = new \stdClass();
        $stdClass->G->CLIENT_CODE = $this->getTerminalId();
        $stdClass->G->CLIENT_USERNAME = $this->getUsername();
        $stdClass->G->CLIENT_PASSWORD = $this->getPassword();
        
        return $stdClass;
    }

}
