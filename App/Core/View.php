<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 01/10/2017
 * Time: 01:10 AM
 */

namespace App\Core;


class View
{
    public $view;


    public function __construct()
    {

    }

    /*
     * page layout
     */
    public function render ($view)
    {
        require_once (VIEW.'_includes/header.php');
        require_once  (VIEW.$view.'.php');
        require_once (VIEW.'_includes/footer.php');
    }




}