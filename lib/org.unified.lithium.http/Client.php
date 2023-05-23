<?php namespace Unified\Lithium\HTTP;

use Exception;

class Client {
    private $timeout = 10; // Request timeout in seconds
  
    public function setTimeout($timeout) {
      $this->timeout = $timeout;
    }
    
    public function get($url, $headers = []) {
        return $this->sendRequest('GET', $url, $headers);
    }
    
    public function post($url, $data, $headers = []) {
        return $this->sendRequest('POST', $url, $headers, $data);
    }
    
    public function put($url, $data, $headers = []) {
        return $this->sendRequest('PUT', $url, $headers, $data);
    }
    
    public function delete($url, $headers = []) {
        return $this->sendRequest('DELETE', $url, $headers);
    }
    
    public function patch($url, $data, $headers = []) {
        return $this->sendRequest('PATCH', $url, $headers, $data);
    }
    
    private function sendRequest($method, $url, $headers = [], $data = null) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);
    
        if ($data !== null) {
          curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }
    
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $headers = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        curl_close($ch);
    
        return new Response($response, $httpCode, $headers);
    }
  }
