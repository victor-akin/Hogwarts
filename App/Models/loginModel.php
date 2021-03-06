<?php

/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 25/09/2017
 * Time: 10:06 AM
 */
namespace App\Models;


use App\Core\Model;

class loginModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($data)
    {

        try{
            $query = $this->db->query("SELECT name,token FROM admin WHERE name =:name", ['name' => $data[0]]);
            $result = $query->fetch();
            if(!empty($result->name) && $result->token === verify_pass($data[1])) {
                $_SESSION['bb752c7f1adbdd71be05b40bb9919f17'] = md5($result->name.$result->token);
                return true;
            }

        }
        catch (\Exception $e) {
            var_dump($e);
        }
        return false;
    }

    public function register($data)
    {

        if(  $this->exists('name', $data['name']) && $this->exists('email', $data['email']) ) {
            // record exists already
            return false;
        }
        elseif ($data['email'] != '' && $data['name'] != '') {
            $data['token'] = md5($data['token']);
            $insert = $this->db->insert('students', $data);
            return true;
        }
    }

    /*
     * if $data exists in database return true
     * else return false
     */

    public function exists($column, $data)
    {
        $query = $this->db->query("SELECT * FROM students WHERE $column =:record ", ['record' => $data]);
        if($query->rowCount() > 0 ) return true;
            return false;
    }

}