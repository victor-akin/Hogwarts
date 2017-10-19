<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 24/09/2017
 * Time: 08:50 PM
 */

session_start();


require_once  ('App/Libs/consts.php');
require_once  ('App/Classes/Database.php');
require_once  ('App/Libs/init.php');
require_once ('App/Core/App.php');
require_once  ('App/Core/View.php');
require_once ('App/Libs/functions.php');

$App = new \App\Core\App;