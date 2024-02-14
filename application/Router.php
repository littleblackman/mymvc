<?php

require_once(CONTROLLER.'/WelcomeController.php');

/**
 * Class Router
 * Nomenclature des routes
 * domaine.com/nomv_de_la_route/params1/params2/params3/etc.
 */

class Router {

    private $queryString;
    private $route;

    private $routes = [
        'hello' => ['controller' => 'WelcomeController', 'method' => 'hello', 'params' => ['id', 'date']],
        'show' => ['controller' => 'WelcomeController', 'method' => 'show'],
    ];

    private $params = [];

    private $defaultRoute = "hello";

    public function __construct()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = substr($url, 1);

        // create route
        $this->route = $this->extractRoute($url);
        // create params

        $this->params = $this->extractParams($url);


    }

    public function extractRoute($url) {
        $el = explode('/', $url);
        ($el[0] == '') ? $route = $this->defaultRoute : $route = $el[0];
        return $route;
    }

    public function extractParams($url) {

        $params = [];

        // params en GET
        $el = explode('/', $url);
        unset($el[0]);
        $el = array_values($el);

        if(array_key_exists($this->route, $this->routes)) {
            if(isset($this->routes[$this->route]['params'])) {
                $paramsDeclared = $this->routes[$this->route]['params'];
                foreach($paramsDeclared as $key => $param) {
                    if(isset($el[$key])) $params[$param] = $el[$key];
                }
            }

        }

        // faire la même chose pour les params en POST

       return $params;
    }

    public function render()
    {

        if(!array_key_exists($this->route, $this->routes)) {
            echo '404';
            exit;
        }

        $controller = $this->routes[$this->route]['controller'];
        $method = $this->routes[$this->route]['method'];
        $params = $this->params;

        $controller = new $controller();
        $controller->$method($params);

    }

}