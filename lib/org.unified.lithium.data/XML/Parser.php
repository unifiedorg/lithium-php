<?php namespace Unified\Lithium\Data\XML;

class Parser {  
    private $xmlString;

    public function __construct($xmlString) {
      $this->xmlString = $xmlString;
    }
  
    public function parse() {
      $xml = simplexml_load_string($this->xmlString, 'SimpleXMLElement', LIBXML_NOCDATA);
      return $this->parseNode($xml);
    }
  
    private function parseNode($node) {
      $result = array(
        'name' => $node->getName(),
        'attributes' => array(),
        'value' => (string)$node,
        'children' => array(),
      );
  
      foreach ($node->attributes() as $name => $value) {
        $result['attributes'][$name] = (string)$value;
      }
  
      foreach ($node->children() as $child) {
        $childData = $this->parseNode($child);
        $result['children'][] = $childData;
      }
  
      return $result;
    }
}
