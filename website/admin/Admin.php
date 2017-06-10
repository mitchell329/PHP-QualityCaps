<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/10
 * Time: 22:25
 * The entry page for all the admin pages
 */
include ('../scripts/checkLogin.php');
session_start();

if ($authSuccess)
{
    $page_content = '../templates/LeftMenuTemplate.php';
    $menu = 'AdminMenu.php';
    if (isset($_GET['page']))
    {
        $page_name = $_GET['page'];
        $right_content = $page_name.'.php';
        $page_title = $page_name.' - Quality Caps';
    }
    elseif (isset($_POST['page']))
    {
        $page_name = $_POST['page'];
        $right_content = $page_name.'.php';
        $page_title = $page_name.' - Quality Caps';
    }
    else
    {
        $right_content = 'CapManagement.php';
        $page_title = 'Cap Management - Quality Caps';
    }
}

include ('../templates/MainTemplate.php');
