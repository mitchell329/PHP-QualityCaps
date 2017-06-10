<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/11
 * Time: 0:47
 */
require_once (dirname(__FILE__).'/../../library/business_layer/business.inc.php');
session_start();

$business = new Business();
//$username = $_SESSION['user'];
//$userID = $business->getUserID($username);

$orders = $business->getAllOrders();
while ($order = $orders->fetch_assoc())
{
    $optionWaiting = '';
    $optionShipped = '';
    if ($order['Status'] == 'waiting')
    {
        $optionWaiting = 'selected';
    }
    else
    {
        $optionShipped = 'selected';
    }

    $orderList[] = '<tr>';
    $orderList[] = '<td>'.$order['OrderID'].'</td>';
    $orderList[] = '<td>'.$order['Username'].'</td>';
    $orderList[] = '<td>$'.$order['Subtotal'].'</td>';
    $orderList[] = '<td>$'.$order['GST'].'</td>';
    $orderList[] = '<td>$'.$order['GrandTotal'].'</td>';
    $orderList[] = '<td><select id="select'.$order['OrderID'].'" onchange="changeOrderStatus('.$order['OrderID'].')">';
    $orderList[] = '<option value="waiting" '.$optionWaiting.'>waiting</option>';
    $orderList[] = '<option value="shipped" '.$optionShipped.'>shipped</option></select></td>';
    $orderList[] = '<td><button id="btn'.$order['OrderID'].'" onclick="updateOrderStatus('.$order['OrderID'].')">Save</button></td>';
    $orderList[] = '</tr>';
}

?>
<div class="section-title"><span class="glyphicon glyphicon-user"></span> Order Management</div>
<div class="customer-list">
    <table class="table table-hover" cellspacing="0" cellpadding="4" style="color:#333333;width:100%;border-collapse:collapse;">
        <thead>
        <tr style="color:White;background-color:#507CD1;font-weight:bold; height: 36px">
            <th scope="col">ID</th>
            <th scope="col">Username</th>
            <th scope="col">Subtotal</th>
            <th scope="col">GST</th>
            <th scope="col">Grand Total</th>
            <th scope="col">Status</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php echo join('', $orderList);?>
        </tbody>
    </table>
</div>