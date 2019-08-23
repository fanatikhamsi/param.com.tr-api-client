<?php

namespace Param;

class Response {

    protected $response;
    protected $xml;

    public function __construct($response) {
        $this->response = $response;
        $this->xml = new SimpleXMLElement($response);
    }

    public function response() {
        return $this->response;
    }

}
