<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 25/09/2017
 * Time: 10:04 AM
 */



spl_autoload_register(function($classname) {
    $classname = preg_replace('/\\\/', '/', $classname);

    require_once ($classname.'.php') ;
});

