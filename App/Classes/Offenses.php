<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 25/09/2017
 * Time: 04:25 PM
 */

namespace App\Classes;


use App\Classes\Database;

class Offenses
{
    private $sID;
    public $db;
    public $offense;

    public function __construct($sID)
    {
        $this->db = new Database;
        $offense = $this->db->query("SELECT * FROM offenses WHERE student_id = :id",['id' => $sID]);
        $this->offense = $offense->fetch();
    }

    public function offense()
    {
        return $this->offense->details;
    }
}