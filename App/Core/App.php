<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 30/09/2017
 * Time: 09:52 AM
 */

namespace App\Core;

use App\Controllers\ErrorController;

class App
{
    public $controller = 'student';
    public $method = 'index';
    public $args = [];

    public function __construct()
    {
        $url = $this->__parseURL();

        $this->controller =$this->__loadController($url[0]);
        unset($url[0]);
        $url = array_values($url);

        if(isset($url[0]))
            $this->method = $this->__loadMethod($url[0]);

        if(isset($url[0]))
            if($this->method === $url[0]) unset($url[0]);
        $this->args = array_values($url);
//var_dump($this->args); die();
        call_user_func_array([$this->controller,$this->method],$this->args );


    }

    private function __loadController ($controller)
    {
        if(file_exists("App/Controllers/".ucfirst($controller)."Controller.php")) {
            require_once ("App/Controllers/".ucfirst($controller)."Controller.php");
            $this->controller = 'App\Controllers\\'.ucfirst($controller).'Controller';
            $this->controller = new $this->controller;
            return $this->controller;
        } else {
            //if its  wrong controller load students controller by default
            $this->controller = new ErrorController;
            return $this->controller;
        }
    }

    private function __loadMethod($method)
    {
        if(method_exists($this->controller,$method)) {
            $this->method = $method;
            return $this->method;
        } else {
            if(!method_exists($this->controller,$method))
                return $this->method;
        }
    }


    private function __parseURL()
    {
        $url = !isset($_GET['url']) ? $this->controller: $_GET['url'] ;
        $url = explode('/',rtrim($url,'/'));
        return $url;
    }

}