<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 04/10/2017
 * Time: 07:53 PM
 */

function _redirect($uri)
{
    echo "<script> document.title = 'Redirecting...'; window.location= '$uri'; </script>";
}


function verify_pass($password)
{
    return md5($password);
}