<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/12
 * Time: 15:52
 * Entry point for shopping cart page.
 */
if (isset($_GET['action']) && $_GET['action'] == 'CheckOut')
{
    $page_title = 'Check Out - Quality Caps';
    $page_content = 'CheckOut.php';
}
else
{
    $page_title = 'Shopping Cart - Quality Caps';
    $page_content = 'CartItems.php';
}

include ('../templates/MainTemplate.php');