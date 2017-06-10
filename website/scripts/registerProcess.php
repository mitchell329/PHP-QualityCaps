<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/10
 * Time: 13:21
 * Register a user and save into database
 */
session_start();
require_once (dirname(__FILE__).'/../../library/business_layer/business.inc.php');

$business = new Business();

$username = $_POST['username'];
$password = $_POST['password'];
$homePhone = $_POST['homePhone'];
$workPhone = $_POST['workPhone'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address = $_POST['address'];

if ($business->isUserExist($username))
{
    echo 'user exists';
    exit;
}

if ($business->saveUser($username, $password, $homePhone, $workPhone, $mobile, $email, $address))
{
    $business->sendEmail($email, $username, $password);

    $_SESSION['user'] = $username;
    $_SESSION['role'] = 'user';
    echo 'success';
}
else
{
    echo 'register failed';
    exit;
}