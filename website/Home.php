<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/8
 * Time: 18:55
 * Main content of Home page.
 */
?>
<!--Banners-->
<div id="banners" class="carousel slide" data-ride="carousel">
    <!--Indicator-->
    <ol class="carousel-indicators">
        <li data-target="#banners" data-slide-to="0" class="active"></li>
        <li data-target="#banners" data-slide-to="1"></li>
        <li data-target="#banners" data-slide-to="2"></li>
        <li data-target="#banners" data-slide-to="3"></li>
    </ol>

    <!--Wrapper for slides-->
    <div class="carousel-inner" role="listbox">
        <div class="item active"><img src="images/banner0.jpg" alt="quality-caps-banner0"></div>
        <div class="item"><img src="images/banner1.jpg" alt="quality-caps-banner1"></div>
        <div class="item"><img src="images/banner2.jpg" alt="quality-caps-banner2"></div>
        <div class="item"><img src="images/banner3.jpg" alt="quality-caps-banner3"></div>
    </div>

    <!--Left and right control-->
    <a class="left carousel-control" href="#banners" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#banners" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!--Recommendation section-->
<div class="section-title"><span class="glyphicon glyphicon-heart"></span> RECOMMENDATION</div>
<div class="row section">
    <div class="section-item col-md-3">
        <div class="thumbnail">
            <div class="item-infor">
                <a href="catalog/CapInfo.php?capID=8">
                    <img src="images/caps/men/Nike Met Swoosh Cap Junior-black-1.jpg" alt="Nike Met Swoosh Cap" class="item-image img-responsive"/>
                    <p class="item-caption">Nike Met Swoosh Cap Black</p>
                </a>
            </div>
            <div class="item-function-bar">
                <span class="price-tag">$9.99</span>
                <button id="btnAdd8" class="add-to-cart" onclick="addToCart(8)"><span class="glyphicon glyphicon-shopping-cart"></span> Add</button>
            </div>
        </div>
    </div>
    <div class="section-item col-md-3">
        <div class="thumbnail">
            <div class="item-infor">
                <a href="catalog/CapInfo.php?capID=13">
                    <img src="images/caps/men/Under Armour Blitzing Mens Cap-blue-1.jpg" alt="Under Armour Blitzing Mens Blue" class="item-image img-responsive"/>
                    <p class="item-caption">Under Armour Blitzing Mens Blue</p>
                </a>
            </div>
            <div class="item-function-bar">
                <span class="price-tag">$12.21</span>
                <button id="btnAdd13" class="add-to-cart" onclick="addToCart(13)"><span class="glyphicon glyphicon-shopping-cart"></span> Add</button>
            </div>
        </div>
    </div>
    <div class="section-item col-md-3">
        <div class="thumbnail">
            <div class="item-infor">
                <a href="catalog/CapInfo.php?capID=26">
                    <img src="images/caps/women/Nike Feather Visor Ladies-white-1.jpg" alt="Nike Feather Visor Ladies White" class="item-image img-responsive"/>
                    <p class="item-caption">Nike Feather Visor Ladies White</p>
                </a>
            </div>
            <div class="item-function-bar">
                <span class="price-tag">$12.21</span>
                <button id="btnAdd26" class="add-to-cart" onclick="addToCart(26)"><span class="glyphicon glyphicon-shopping-cart"></span> Add</button>
            </div>
        </div>
    </div>
    <div class="section-item col-md-3">
        <div class="thumbnail">
            <div class="item-infor">
                <a href="catalog/CapInfo.php?capID=35">
                    <img src="images/caps/children/No Fear Necro Snapback Boys-1.jpg" alt="No Fear Necro Snapback Black" class="item-image img-responsive"/>
                    <p class="item-caption">No Fear Necro Snapback Black</p>
                </a>
            </div>
            <div class="item-function-bar">
                <span class="price-tag">$5.99</span>
                <button id="btnAdd35" class="add-to-cart" onclick="addToCart(35)"><span class="glyphicon glyphicon-shopping-cart"></span> Add</button>
            </div>
        </div>
    </div>
</div>

<!--Hot Sales section-->
<div id="hot-sails-section">
    <div class="section-title"><span class="glyphicon glyphicon-fire"></span> HOT SALES</div>
    <div class="row">
        <div class="section-item col-md-3">
            <div class="thumbnail">
                <div class="item-infor">
                    <a href="catalog/CapInfo.php?capID=32">
                        <img src="images/caps/children/Character Flat peak Juniors-batman-1.jpg" alt="Character Flat peak Juniors Batman" class="item-image img-responsive"/>
                        <p class="item-caption">Character Flat peak Juniors Batman</p>
                    </a>
                </div>
                <div class="item-function-bar">
                    <span class="price-tag">$4.50</span>
                    <button id="btnAdd32" class="add-to-cart" onclick="addToCart(32)"><span class="glyphicon glyphicon-shopping-cart"></span> Add</button>
                </div>
            </div>
        </div>
        <div class="section-item col-md-3">
            <div class="thumbnail">
                <div class="item-infor">
                    <a href="catalog/CapInfo.php?capID=15">
                        <img src="images/caps/men/Under Armour Blitzing Mens Cap-navy-1.jpg" alt="Under Armour Blitzing Mens Navy" class="item-image img-responsive"/>
                        <p class="item-caption">Under Armour Blitzing Mens Navy</p>
                    </a>
                </div>
                <div class="item-function-bar">
                    <span class="price-tag">$12.21</span>
                    <button id="btnAdd15" class="add-to-cart" onclick="addToCart(15)"><span class="glyphicon glyphicon-shopping-cart"></span> Add</button>
                </div>
            </div>
        </div>
        <div class="section-item col-md-3">
            <div class="thumbnail">
                <div class="item-infor">
                    <a href="catalog/CapInfo.php?capID=20">
                        <img src="images/caps/women/Firetrap Offense Cap Ladies-navy-1.jpg" alt="Firetrap Offense Cap Ladies Navy" class="item-image img-responsive"/>
                        <p class="item-caption">Firetrap Offense Cap Ladies Navy</p>
                    </a>
                </div>
                <div class="item-function-bar">
                    <span class="price-tag">$4.50</span>
                    <button id="btnAdd20" class="add-to-cart" onclick="addToCart(20)"><span class="glyphicon glyphicon-shopping-cart"></span> Add</button>
                </div>
            </div>
        </div>
        <div class="section-item col-md-3">
            <div class="thumbnail">
                <div class="item-infor">
                    <a href="catalog/CapInfo.php?capID=30">
                        <img src="images/caps/women/Under Armour Solid Ladies-pink-1.jpg" alt="Under Armour Solid Ladies Pink" class="item-image img-responsive"/>
                        <p class="item-caption">Under Armour Solid Ladies Pink</p>
                    </a>
                </div>
                <div class="item-function-bar">
                    <span class="price-tag">$12.21</span>
                    <button id="btnAdd30" class="add-to-cart" onclick="addToCart(30)"><span class="glyphicon glyphicon-shopping-cart"></span> Add</button>
                </div>
            </div>
        </div>
    </div>
</div>