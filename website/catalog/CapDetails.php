<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/12
 * Time: 15:18
 * Display detail information of a cap
 */
require_once (dirname(__FILE__).'/../../library/business_layer/business.inc.php');

if (isset($_GET['capID']))
{
    $capID = $_GET['capID'];
    $business = new Business();
    $caps = $business->getCapDetails($capID);
    while ($cap = $caps->fetch_assoc())
    {
        $capName = $cap['CapName'];
        $category = $cap['CategoryName'];
        $supplier = $cap['SupplierName'];
        $price = $cap['Price'];
        $description = $cap['Description'];
        $imagePath = $cap['ImagePath'];
    }
}
else
{
    echo 'Sorry, page cannot be displayed.';
    exit;
}
?>
<div class="row">
    <div class="col-md-4">
        <img src="<?php echo $imagePath;?>" class="item-image img-responsive" alt="<?php echo $capName;?>">
    </div>
    <div class="col-md-offset-2 col-md-1 cap-info cap-info-label">
        <div><span>Name:</span></div>
        <div><span>Category:</span></div>
        <div><span>Brand:</span></div>
        <div><span>Price:</span></div>
        <div><span>Description:</span></div>
    </div>
    <div class="col-md-5 cap-info">
        <div><span><?php echo $capName;?></span></div>
        <div><span><?php echo $category;?></span></div>
        <div><span><?php echo $supplier;?></span></div>
        <div><span>$ <?php echo $price;?></span></div>
        <div><span><?php echo $description;?></span></div>
        <div><button id="btnAdd" onclick="addToCart(<?php echo $capID;?>)"><span class="glyphicon glyphicon-shopping-cart"></span> Add</button></div>
    </div>
</div>
