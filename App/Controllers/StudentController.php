<?php

/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 24/09/2017
 * Time: 10:18 PM
 */
namespace App\Controllers;

use App\Core\Controller;

class StudentController extends Controller
{


    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->render('home/index');
    }


}