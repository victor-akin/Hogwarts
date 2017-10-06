<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 01/10/2017
 * Time: 01:12 AM
 */

namespace App\Core;


class Controller
{
    public $view;

    public function __construct()
    {
        $this->view = new View;
    }


}