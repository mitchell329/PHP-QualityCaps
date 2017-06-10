<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/9
 * Time: 22:27
 * The entry point for displaying caps list.
 */
$page_content = '../templates/LeftMenuTemplate.php';
$menu = 'CatalogMenu.php';
$right_content = 'CapList.php';

if (isset($_GET['category']))
{
    $page_title = $_GET['category'].' Caps'.' - Quality Caps';
}
else
{
    $page_title = 'All Caps - Quality Caps';
}

include ('../templates/MainTemplate.php');