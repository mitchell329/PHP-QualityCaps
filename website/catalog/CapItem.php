<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/12
 * Time: 13:55
 * The template for a single cap item displayed in the catalog pages
 */
?>
<div class="section-item col-md-3">
    <div class="thumbnail">
        <div class="item-infor">
            <a href="CapInfo.php?capID=<?php echo $capID;?>">
                <img src="<?php echo $imagePath;?>" alt="<?php echo $capName;?>" class="item-image img-responsive"/>
                <p class="item-caption"><?php echo $capName;?></p>
            </a>
        </div>
        <div class="item-function-bar">
            <span class="price-tag"><?php echo $price;?></span>
            <button class="add-to-cart" onclick="addToCart(<?php echo $capID;?>)"><span class="glyphicon glyphicon-shopping-cart"></span> Add</button>
        </div>
    </div>
</div>
