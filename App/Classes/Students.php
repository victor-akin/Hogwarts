<?php

/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 25/09/2017
 * Time: 10:09 AM
 */
namespace App\Classes;

use App\Classes\Database;
use App\Controllers\ErrorController;

class Students
{
    private $sID;
    public $db;
    public $student;

    public function __construct($sID)
    {
        $this->sID = $sID;
        $this->db = new Database;
        $student = $this->db->query("SELECT * FROM students WHERE id = :id",['id' => $sID]);
        $this->student = $student->fetch();
        if($this->student == false) {
            $error = new ErrorController();
            $error->index();
        }
    }

    public function name()
    {
        return $this->student->name;
    }

    public function has_offense ()
    {
        $offense = $this->db->query("SELECT student_id FROM offenses WHERE student_id = :id",['id' => $this->sID]);
        return $offense->rowCount();
    }


}



