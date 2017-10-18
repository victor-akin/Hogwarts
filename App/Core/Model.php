<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 18/10/2017
 * Time: 05:11 PM
 */

namespace App\Core;



use App\Classes\Database;

class Model
{
    public $db;

    public function __construct()
    {
        $this->db = new Database();
    }

}