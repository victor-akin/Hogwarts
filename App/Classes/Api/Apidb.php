<?php

/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 25/09/2017
 * Time: 10:09 AM
 */

namespace App\Classes\Api;



class Apidb
{
    public $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getStudents ()
    {
        $students = $this->db->query("SELECT name from students WHERE name=:name",['name'=>'Watti Juwon']);
        return json_encode($students);
    }

}