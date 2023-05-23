<?php
$router->addRoute('GET', '/', function () { \Unified\Lithium\Store\View::get('home', 'Home'); });

$router->addRoute('GET', '/patreon', function () { header("Location: https://www.patreon.com/unifiedorg"); });
$router->addRoute('GET', '/kofi', function () { header("Location: https://ko-fi.com/unified"); });

$router->addRoute('GET', '/http', function () {
  $client = new \Unified\Lithium\HTTP\Client;
  $response = $client->get('https://raw.githubusercontent.com/guzzle/guzzle/7.5/composer.json');
  $body = $response->getResponse();

  // Accessing response information
  echo "Fetched the link 'https://raw.githubusercontent.com/guzzle/guzzle/7.5/composer.json' : <br>";
  echo "HTTP Code: " . $response->getHttpCode() . "<br>";
  echo "<br>Body :<br>";
  echo $body;
});

$router->addRoute('GET', '/data/ini', function () {
  $iniString = '
  ; Example INI data
  [cat1]
  value1 = Hello there! This is value 1!
  value2 = Hey there, i\'m value 2!
';

  $parser = new \Unified\Lithium\Data\INI\Parser($iniString);
  echo "Value 1: " . $parser->getValue('cat1', 'value1') . "<br>";
  echo "Value 2: " . $parser->getValue('cat1', 'value2') . "<br>";
  echo "Unknown Value: " . $parser->getValue('egegzdf', 'weg');
});

$router->addRoute('GET', '/data/xml', function () {
  $xmlString = '
  <games>
    <game category="fps">
      <title>CS:GO</title>
      <store>Steam</store>
    </game>
    <game category="sandbox">
      <title>Minecraft</title>
      <store>minecraft.net, Play Store, iOS, Microsoft Store</store>
    </game>
  </games>
  ';
  
  $parser = new \Unified\Lithium\Data\XML\Parser($xmlString);
  $parsedData = $parser->parse();

  echo "Game : " . $parsedData['children'][0]['children'][0]['value'] . " | Stores : ";
  echo $parsedData['children'][0]['children'][1]['value'];

  echo "<br>";

  echo "Game : " . $parsedData['children'][1]['children'][0]['value'] . " | Stores : ";
  echo $parsedData['children'][1]['children'][1]['value'];
});

$router->setNotFound(function () {
  header('HTTP/1.0 404 Not Found');
  \Unified\Lithium\Store\View::get("error/notFound", "404");
});
