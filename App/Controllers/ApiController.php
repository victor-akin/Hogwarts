<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 01/10/2017
 * Time: 01:18 PM
 */

namespace App\Controllers;

use App\Classes\Api\Apidb;
use App\Classes\Database;

class ApiController
{
    public $db;
    public function __construct()
    {
        $this->db = new Database;

    }

    public function index()
    {
        $data = $_GET['data'];

        if($_SERVER['REQUEST_METHOD'] === 'GET' && $data !== '') {
            $query = $this->db->query("SELECT id,name FROM students WHERE name LIKE :name", ['name' => "%$data%"]);
            $name = $query->fetchAll();

            $names = [];
            for ($i = 0; $i < count($name); $i++) {
                $names += [$name[$i]->name => $name[$i]->id] ;
            }


            if (isset($names) && !empty($names)) {
                foreach ($names as $key => $val) {
                    echo " <a href= 'StudentDetails/$val'  >" .$key. "</a> <br>" ;
                }
            }
        }
    }

}