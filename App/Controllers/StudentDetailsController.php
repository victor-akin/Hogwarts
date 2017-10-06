<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 04/10/2017
 * Time: 05:57 PM
 */

namespace App\Controllers;

use App\Core\Controller;

class StudentDetailsController extends Controller
{
    public $args;

    public function __construct()
    {
        parent::__construct();
    }

    public function index($args)
    {
        $this->details($args);
    }

    public function details($id)
    {
        $this->view->render('home/index');
    }

}