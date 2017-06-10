<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/12
 * Time: 23:14
 * Check whether a user has logged in. If not, redirect to login page.
 */
session_start();

if (!isset($_SESSION['user']))
{
    header("Location: ../account/Account.php?page=Login&from=".urlencode($_SERVER[REQUEST_URI]));
}
else
{
    $pageName = basename($_SERVER['PHP_SELF']);
    $username = $_SESSION['user'];
    $authSuccess = true;
    if ($pageName == 'Admin.php' && $username != 'admin')
    {
        $page_content = 'AuthFail.php';
        $page_title = 'Access denied - Quality Caps';
        $authSuccess = false;
    }
}