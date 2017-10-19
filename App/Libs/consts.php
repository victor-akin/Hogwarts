<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 25/09/2017
 * Time: 10:18 AM
 */

define('DBNAME', 'Hogwarts');
define('HOST', 'localhost');
define('PASS', '');
define('USER', 'root');

$project_path = '/Hogwarts/';

define('PROJECT_ROOT', $project_path);
define('PUBLIC_ROOT', $project_path.'Public/');

// App
define('APP_ROOT', __DIR__.'/../');
define('VIEW', APP_ROOT.'Views/');

// Public
define('STYLE', PUBLIC_ROOT . 'css/');
define('SCRIPT', PUBLIC_ROOT . 'js/');

//Links
define ('HOME', PROJECT_ROOT);



//echo PROJECT_ROOT;