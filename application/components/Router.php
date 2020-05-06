<?php
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 04.04.2020
 * Time: 20:24
 */


namespace application\components;

use application\controllers\SiteController;
use application\controllers\UserController;
use application\controllers\admin\DashboardController;
use application\controllers\admin\CategoryController;
class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = __DIR__.'/../config/routes.php';
        $this->routes = include_once($routesPath);


    }

    private function getUri()
    {
        if (!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        $uri = $this->getUri();


        foreach ($this->routes as $pattern => $path)
        {
            if (preg_match("~$pattern~",$uri)) {
                $route = preg_replace("~$pattern~", $path, $uri);

                $segments = explode('/', $route);

                $controllerPath = "application/controllers/";
                if (in_array('admin',$segments)) {
                    $controllerPath = 'application/controllers/admin/';
                    array_shift($segments);
                }

                $controllerName = $controllerPath.ucfirst(array_shift($segments))."Controller";

                $actionName = "action".ucfirst(array_shift($segments));

                $parameters = $segments;


                if (!file_exists($controllerName.'.php')) {
                    //header("Location: /error");
                }

                $controllerName = str_replace("/", "\\", $controllerName);

                $objectName = new $controllerName();

                if (!method_exists($objectName, $actionName)) {
                    //header("Location: /error");
                }

                $result = call_user_func_array(array($objectName, $actionName), $parameters);

                if ($result != null) {
                    break;
                }
            }
        }
    }
}