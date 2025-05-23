<?php
namespace app;

use controllers\home\HomeController;
use controllers\users\UsersController;
use controllers\roles\RoleController;
use controllers\pages\PageController;
use controllers\auth\AuthController;
use controllers\orders_cons\ConsController;
use controllers\orders\OrderController;

class Router {

    private $routes = [
        '/^\/' . APP_BASE_PATH . '\/?$/' => ['controller' => 'home\\HomeController', 'action' => 'index'],
        '/^\/' . APP_BASE_PATH . '\/users(\/(?P<action>[a-z]+)(\/(?P<id>\d+))?)?$/' => ['controller' => 'users\\UsersController'],
        '/^\/' . APP_BASE_PATH . '\/auth(\/(?P<action>[a-z]+)(\/(?P<id>\d+))?)?$/' => ['controller' => 'auth\\AuthController'],
        '/^\/' . APP_BASE_PATH . '\/roles(\/(?P<action>[a-z]+)(\/(?P<id>\d+))?)?$/' => ['controller' => 'roles\\RoleController'],
        '/^\/' . APP_BASE_PATH . '\/pages(\/(?P<action>[a-z]+)(\/(?P<id>\d+))?)?$/' => ['controller' => 'pages\\PageController'],
        '/^\/' . APP_BASE_PATH . '\/(register|login|authenticate|logout)(\/(?P<action>[a-z]+))?$/' => ['controller' => 'users\\AuthController'],
        '/^\/' . APP_BASE_PATH . '\/orders_cons(\/(?P<action>[a-z]+)(\/(?P<id_orderscons>\d+))?)?$/' => ['controller' => 'orders_cons\\ConsController'],
        '/^\/' . APP_BASE_PATH . '\/orders(\/(?P<action>[a-z]+)(\/(?P<id_orders>\d+))?)?$/' => ['controller' => 'orders\\OrderController'],
    ];

    public function run() {
        $uri = $_SERVER['REQUEST_URI'];
        $controller = null;
        $action = null;
        $params = null;

        foreach ($this->routes as $pattern => $route) {
            if (preg_match($pattern, $uri, $matches)) {
                $controller = "controllers\\" . $route['controller'];
                $action = $route['action'] ?? $matches['action'] ?? 'index';
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
                break;
            }
        }

        if (!$controller) {
            http_response_code(404);
            echo "Page not found!";
            return;
        }

        $controllerInstance = new $controller();
        if (!method_exists($controllerInstance, $action)) {
            http_response_code(404);
            echo "Action not found!";
            return;
        }
        call_user_func_array([$controllerInstance, $action], [$params]);
    }
}
