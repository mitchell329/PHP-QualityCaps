<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/12
 * Time: 16:19
 * Place an order and save save items in the shopping cart to database.
 * If no user logs in, redirect to Login page.
 */
include ('../scripts/checkLogin.php');
require_once (dirname(__FILE__).'/../../library/business_layer/business.inc.php');
session_start();

$username = $_SESSION['user'];

if (isset($_SESSION['shoppingCart']) && count($_SESSION['shoppingCart']) != 0)
{
    $business = new Business();
    $total = 0.00;
    $arrCart = $_SESSION['shoppingCart'];

    foreach ($arrCart as $id => $qty)
    {
        $caps = $business->getCapByID($id);
        while ($cap = $caps->fetch_assoc())
        {
            $price = $cap['Price'];
        }

        //$price = $business->getCapPrice($capID);
        $subtotal = (float)$price * (int)$qty;
        $total += $subtotal;
    }
    $GST = $total * 0.15;
    $grandTotal = $GST + $total;
    $status = 'waiting';

//    echo $total.'<br>'.$GST.'<br>'.$grandTotal.'<br>'.$status.'<br>';
//    exit;
    $orderID = $business->placeOrder($username, $total, $GST, $grandTotal, $status);

    if ($orderID != 0)
    {
        foreach ($arrCart as $capID => $qty)
        {
            $business->createOrderItem($orderID, $capID, $qty);
        }
        $result = '<p class="empty-cart">Your order has been submitted. Thank you for shopping!</p>
                   <p><a href="/yuans06/php_assignment/website/index.php">Back to Home</a></p>';
        unset($_SESSION['shoppingCart']);
    }
    else
    {
        $result = '<p>Error: order submission failed!</p>';
    }
}
else
{
    $result = '<p>Error: no order is found!</p>';
}
?>
<div class="add-title">Check Out</div>
<div id="result">
    <?php echo $result;?>
</div>
