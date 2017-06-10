<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/13
 * Time: 2:14
 * Update order status
 */
require_once (dirname(__FILE__).'/../../library/business_layer/business.inc.php');

$orderID = $_POST['orderID'];
$newStatus = $_POST['newStatus'];

$business = new Business();
if ($business->updateOrderStatus($orderID, $newStatus))
{
    echo 'success';
    exit;
}
else
{
    echo 'failed';
    exit;
}