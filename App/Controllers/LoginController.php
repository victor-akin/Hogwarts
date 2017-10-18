<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 18/10/2017
 * Time: 03:47 PM
 */

namespace App\Controllers;

use App\Core\Controller;
use App\Models\loginModel;

class LoginController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        if(isset($_POST['login'])&& $_POST['login']  == 'login') {
            $login_user = new loginModel();
           _redirect('student');
        }
        $this->view->render('login/login');
    }

}