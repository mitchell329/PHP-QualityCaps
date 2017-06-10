<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/10
 * Time: 19:14
 * Validate username and password to login
 */
session_start();
require_once (dirname(__FILE__).'/../../library/business_layer/business.inc.php');

$business = new Business();
$username = $_POST['username'];
$password = $_POST['password'];

$result = $business->validateLogin($username, $password);
if ($result == 'success')
{
    $_SESSION['user'] = $username;
    if ($username == 'admin')
    {
        $_SESSION['role'] = 'administrator';
    }
    else
    {
        $_SESSION['role'] = 'user';
    }
}
echo $result;