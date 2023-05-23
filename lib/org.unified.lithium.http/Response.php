<?php namespace Unified\Lithium\HTTP;

class Response {
    private $response;
    private $httpCode;
    private $headers;
  
    public function __construct($response, $httpCode, $headers) {
      $this->response = $response;
      $this->httpCode = $httpCode;
      $this->headers = $headers;
    }
  
    public function getResponse() {
      return $this->response;
    }
  
    public function getHttpCode() {
      return $this->httpCode;
    }
  
    public function getHeaders() {
      return $this->headers;
    }
  
    public function getHeader($name) {
      return isset($this->headers[$name]) ? $this->headers[$name] : null;
    }
  }
