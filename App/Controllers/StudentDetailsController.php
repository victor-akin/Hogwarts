<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 04/10/2017
 * Time: 05:57 PM
 */

namespace App\Controllers;

use App\Core\Controller;
use App\Classes\Students;
use App\Classes\Offenses;

class StudentDetailsController extends Controller
{
    public $args;

    public function __construct()
    {
        parent::__construct();
    }

    /*
     * will fetch and deliver students details
     * and offenses if any
     */
    public function index($args = '')
    {
        $student = new Students($args);
        $this->view->name = $student->name();

        if($student->has_offense() > 0) {
            $offense = new Offenses($args);
            $this->view->offense = $offense->offense();
        } else{
            $this->view->offense = 'Clean Record';
        }

        $this->view->render('details/index');
    }


}