<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/10
 * Time: 11:49
 */
//include ('../scripts/checkLogin.php');
require_once (dirname(__FILE__).'/../../library/business_layer/business.inc.php');
require ('../scripts/ErrorProcess.php');
$error_handler = set_error_handler("userErrorHandler");
session_start();

$username = $_SESSION['user'] or trigger_error("Session variable 'user' not found", E_USER_ERROR);
$business = new Business();

//Get detail information of current user
$result = $business->getUserByName($username);
while ($user = $result->fetch_assoc())
{
    $userID = $user['UserID'];
    $password = $user['Password'];
    $homePhone = $user['HomePhone'];
    $workPhone = $user['WorkPhone'];
    $mobile = $user['Mobile'];
    $email = $user['Email'];
    $address = $user['Address'];
}

//Get and display all the order records of current user
$orders = $business->getOrderByUser($userID);
while ($order = $orders->fetch_assoc())
{
    $orderID = $order['OrderID'];
    $subtotal = $order['Subtotal'];
    $GST = $order['GST'];
    $grandTotal = $order['GrandTotal'];
    $status = $order['Status'];

    $orderList[] = '<tr>';
    $orderList[] = '<td>'.$orderID.'</td>';
    $orderList[] = '<td>$'.$subtotal.'</td>';
    $orderList[] = '<td>$'.$GST.'</td>';
    $orderList[] = '<td>$'.$grandTotal.'</td>';
    $orderList[] = '<td>'.$status.'</td>';
    $orderList[] = '</tr>';
}
?>
<div class="add-title">Profile</div>
<div class="section-title"><span class="glyphicon glyphicon-user"></span> My Profile</div>
<div class="profile-infor">
    <div class="row">
        <div class="col-md-2">
            <div><span>Username:</span></div>
            <div><span>Password:</span></div>
            <div><span>Email:</span></div>
        </div>
        <div class="col-md-4">
            <div><span><?php echo $username;?></span></div>
            <div><span><?php echo $password;?></span></div>
            <div><span><?php echo $email;?></span></div>
        </div>
        <div class="col-md-2">
            <div><span>Home Phone:</span></div>
            <div><span>Work Phone:</span></div>
            <div><span>Mobile:</span></div>
        </div>
        <div class="col-md-4">
            <div><span><?php echo $homePhone;?></span></div>
            <div><span><?php echo $workPhone;?></span></div>
            <div><span><?php echo $mobile;?></span></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"><span>Address:</span></div>
        <div class="col-md-10"><span><?php echo $address;?></span></div>
    </div>
</div>

<div class="section-title"><span class="glyphicon glyphicon-th-list"></span> My Orders</div>
<div class="order-list" id="orderList">
    <table class="table table-hover" cellspacing="0" cellpadding="4" style="color:#333333;width:100%;border-collapse:collapse;">
        <thead>
        <tr style="color:White;background-color:#507CD1;font-weight:bold; height: 36px">
            <th scope="col">Order ID</th>
            <th scope="col">Subtotal</th>
            <th scope="col">GST</th>
            <th scope="col">Grand Total</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
        <?php echo join('', $orderList);?>
        </tbody>
    </table>
</div>