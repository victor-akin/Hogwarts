<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 01/10/2017
 * Time: 12:21 PM
 */

namespace App\Controllers;

use App\Core\Controller;

class ErrorController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->render('_errors/404');
        die();
    }

}