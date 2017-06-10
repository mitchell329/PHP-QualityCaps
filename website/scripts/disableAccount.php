<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/11
 * Time: 17:01
 * Disable or enable a user account
 */
require_once (dirname(__FILE__).'/../../library/business_layer/business.inc.php');

if (isset($_POST['userID']))
{
    $userID = $_POST['userID'];
}
if (isset($_POST['enabled']))
{
    $enabled = $_POST['enabled'];
}

$business = new Business();

if ($business->disableAccount($userID, $enabled))
{
    echo true;
}
else
{
    echo false;
}