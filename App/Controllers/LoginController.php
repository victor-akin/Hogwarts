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
            $data = [$_POST['name'], $_POST['password'] ];
            $confirm = $login_user->login($data);
            if($confirm) {
                _redirect('student');
            }
        }
        $this->view->render('login/index');
    }

    /*
     * register new student only
     *
     */
    public function register()
    {

        if(isset($_POST['register']) && $_POST['register']  == 'register') {
            $register_user = new loginModel();
            $data = [
                        'name' => $_POST['name'],
                        'email' => $_POST['email'],
                        'token' => $_POST['password']
                    ];
            $register = $register_user->register($data);
            if($register) {
                _redirect(HOME);
            }
            else {
                $this->view->msg = 'Record exists already';
            }

        }

        $this->view->render('login/register');
    }

    public function logout()
    {
        session_destroy();
        _redirect(HOME);
    }

}