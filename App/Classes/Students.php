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

    /*
     * constructs object with student id int $sID
     * loads errorcontroller if student doesnt exist
     */
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

    /*
     *returns student name
     */
    public function name()
    {
        return $this->student->name;
    }

    /*
     * checks offense table if offenses
     * exist for related student id
     */
    public function has_offense ()
    {
        $offense = $this->db->query("SELECT student_id FROM offenses WHERE student_id = :id",['id' => $this->sID]);
        return $offense->rowCount();
    }


}



