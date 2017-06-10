<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/10
 * Time: 12:00
 * The entry point for register, login and profile pages.
 */
if (isset($_GET['page']))
{
    $page_name = $_GET['page'];
    $page_content = $page_name.'.php';
    $page_title = $page_name.' - Quality Caps';
}
elseif (isset($_POST['page']))
{
    $page_name = $_POST['page'];
    $page_content = $page_name.'.php';
    $page_title = $page_name.' - Quality Caps';
}
else
{
    $page_content = 'Profile.php';
    $page_title = 'Profile - Quality Caps';
}

include ('../templates/MainTemplate.php');