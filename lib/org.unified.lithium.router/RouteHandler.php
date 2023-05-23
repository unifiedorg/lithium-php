<?php namespace Unified\Lithium\Router;

class RouteHandler {
  private $routes = array();
  private $notFound = null;
  private $controllerNamespace = '';

  public function __construct() {
    $this->controllerNamespace = '\\App\\Controllers';
  }

  public function setMVCCNamespace($dir) {
    $this->controllerNamespace = $dir;
  }

  public function addRoute($method, $url, $handler) {
    $this->routes[] = array(
      'method' => $method,
      'url' => $url,
      'handler' => $handler
    );
  }

  public function addMVCRoute($method, $route, $handler) {
    // Documentation? Whats that? Is it some kind of movie? Never heard of it...
    $this->addRoute($method, $route, function($params) use ($handler) {
      list($controller, $action) = explode('@', $handler);

      $controllerClass = $this->controllerNamespace . '\\' . ucfirst($controller) . 'Controller';
      $controllerObj = new $controllerClass();
      
      call_user_func_array(array($controllerObj, $action), array($params));
    });
  }

  public function setNotFound($handler) {
    $this->notFound = $handler;
  }

  public function handle($method, $url) {
    foreach ($this->routes as $route) {
      if ($route['method'] == $method && preg_match('#^'.$route['url'].'$#', $url, $matches)) {
        array_shift($matches);
        call_user_func_array($route['handler'], $matches);
        return;
      }
    }

    if ($this->notFound) {
      call_user_func($this->notFound);
    } else {
      header('HTTP/1.0 404 Not Found');
      echo '404 Not Found';
    }
  }
}
