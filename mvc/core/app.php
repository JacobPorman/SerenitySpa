<?php

use function PHPSTORM_META\type;

class app
{

    protected $controller = "Home"; // file name
    protected $action = "defaultView"; // method in this file
    protected $params = [];


    function __construct()
    {
        $arr = $this->UrlProcess();

        if (file_exists("./mvc/controllers/" . $arr[0] . ".php")) {
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "./mvc/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller; // new Home()


        if (isset($arr[1])) {
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }

        // Params
        $this->params = $arr ? array_values($arr) : [];
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    function UrlProcess()
    {
        if (!isset($_GET["url"])) {
            $_GET["url"] = "home/defaultView";
        }
        if (isset($_GET["url"])) {
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}
