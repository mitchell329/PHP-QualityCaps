<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/12
 * Time: 16:21
 * Display items in the shopping cart
 */
require_once (dirname(__FILE__).'/../../library/business_layer/business.inc.php');

if (isset($_SESSION['shoppingCart']))
{
    $arrCart = $_SESSION['shoppingCart'];
}

if (isset($arrCart) && count($arrCart) != 0)
{
    $total = 0;
    $business = new Business();
    foreach ($arrCart as $id => $qty)
    {
        $caps = $business->getCapDetails($id);
        while ($cap = $caps->fetch_assoc())
        {
            $imagePath = $cap['ImagePath'];
            $capName = $cap['CapName'];
            $supplier = $cap['SupplierName'];
            $price = $cap['Price'];
        }
        $subtotal = (float)$price * (int)$qty;
        $total += $subtotal;

        $itemList[] = '<tr><td valign="middle"><div class="row shopping-cart-record">';
        $itemList[] = '<div class="col-md-2" align="center"><img src="'.$imagePath.'" alt="'.$capName.'" class="img-responsive" style="max-width: 60%" /></div>';
        $itemList[] = '<div class="col-md-3 item-field">'.$capName.'</div>';
        $itemList[] = '<div class="col-md-2 item-field">'.$supplier.'</div>';
        $itemList[] = '<div class="col-md-1 item-field">$'.$price.'</div>';
        $itemList[] = '<div class="col-md-2 item-field">';
        $itemList[] = '<button onclick="updateCartQty('.$id.', -1)" class="shopping-cart-remove">-</button>';
        $itemList[] = '<span>'.$qty.'</span>';
        $itemList[] = '<button onclick="updateCartQty('.$id.', 1)" class="shopping-cart-remove">+</button>';
        $itemList[] = '</div>';
        $itemList[] = '<div class="col-md-1 item-field">$'.number_format($subtotal, 2).'</div>';
        $itemList[] = '<div class="col-md-1 item-field"><button onclick="removeCartItem('.$id.')" class="shopping-cart-remove"><span class="glyphicon glyphicon-trash"></span></button></div>';
        $itemList[] = '</div></td></tr>';
    }

    $GST = $total * 0.15;
    $grandTotal = $total + $GST;
}
else
{
    $itemList[] = '<tr><td valign="middle"><p class="empty-cart">Shopping cart is empty.</p></td></tr>';
    $total = 0.00;
    $GST = 0.00;
    $grandTotal = 0.00;
}

//$itemList[] = 'Shopping cart is empty';
//$total = 3.99;
//$GST = 0.22;
//$grandTotal = 4.11;
?>
<div class="add-title">Shopping Cart</div>
<!--form method="post"-->
    <div id="myCart" class="shopping-cart-placeholder">
        <table class="table table-hover" id="dlstShoppingCart" cellspacing="0" cellpadding="4" style="color:#333333;width:100%;border-collapse:collapse;">
            <thead>
            <tr style="height: 36px">
                <th align="center" style="color:White;background-color:#507CD1;font-weight:bold;text-align:center">
                    <div class="row">
                        <div class="col-md-2">Cap</div>
                        <div class="col-md-3">Name</div>
                        <div class="col-md-2">Supplier</div>
                        <div class="col-md-1">Price</div>
                        <div class="col-md-2">Quantity</div>
                        <div class="col-md-1">Subtotal</div>
                        <div class="col-md-1"></div>
                    </div>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php echo join('', $itemList);?>
            </tbody>
        </table>
    </div>
    <div class="calc-area">
        <div class="row calc-line">
            <div class="col-md-10">Total:</div>
            <div class="col-md-2"><span>$<?php echo number_format($total, 2);?></span></div>
        </div>
        <div class="row calc-line">
            <div class="col-md-10">GST:</div>
            <div class="col-md-2"><span>$<?php echo number_format($GST, 2);?></span></div>
        </div>
        <div class="row calc-line">
            <div class="col-md-10 grand-total">Grand Total:</div>
            <div class="col-md-2 grand-total">$<span id="grandTotal"><?php echo number_format($grandTotal, 2);?></span></div>
        </div>
    </div>
    <div class="operation-area">
        <input type="button" value="Check Out" onclick="checkOut()">
        <input type="button" value="Clear Shopping Cart" onclick="clearCart()">
    </div>
<!--/form-->