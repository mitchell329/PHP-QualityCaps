<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/9
 * Time: 20:24
 * Promotion content in the right sidebar of Home page.
 */
?>
<div class="affixed-sidebar" data-spy="affix">
    <div class="shopping-cart-head">
        <a href="<?php echo ROOT_DIR.'website/shopping/cart.php';?>" class="shopping-cart-link"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;SHOPPING CART&nbsp;&nbsp<span class="badge qty-in-cart" id="cartQtySide"><?php echo $lblCartQuantity?></span></a>
    </div>
    <div class="panel panel-info sidebar-panel">
        <div class="panel-heading section-title">
            <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;CAP OF THE DAY
        </div>
        <div class="panel-body">
            <div class="item-infor">
                <a href="catalog/CapInfo.php?capID=12">
                    <img src="images/caps/men/No Fear Army Hat-grey-1.jpg" alt="No Fear Army Hat" class="item-image img-responsive"/>
                    <p class="item-caption">No Fear Army Hat</p>
                </a>
            </div>
            <div class="item-function-bar">
                <span class="price-tag">$5.99</span>
                <button id="btnAdd12" class="add-to-cart" onclick="addToCart(12)"><span class="glyphicon glyphicon-shopping-cart"></span> Add</button>
            </div>
        </div>
    </div>
</div>
