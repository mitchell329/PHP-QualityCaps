<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/9
 * Time: 11:35
 * Implement template for Home page.
 */
session_start();

$page_title = 'Home - Quality Caps';
$page_content = 'templates/RightSidebarTemplate.php';
$left_content = 'Home.php';
$sidebar = 'SidePromotion.php';
include ('templates/MainTemplate.php');