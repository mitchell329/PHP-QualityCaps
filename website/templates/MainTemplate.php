<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/9
 * Time: 11:09
 */
session_start();
require_once (dirname(__FILE__).'/../config.php');

$pageName = basename($_SERVER['PHP_SELF'], '.php');
switch ($pageName)
{
    case 'index':
        $navHome = 'class="active"';
        break;
    case 'CapInfo':
    case 'Caps':
        $navCatalog = 'class="active"';
        break;
    case 'Contact':
        $navContact = 'class="active"';
        break;
    case 'Admin':
        $navAdmin = 'class="active"';
        break;
    case 'Account':
        switch ($_GET['page'])
        {
            case 'Register':
            case 'Profile':
                $navSignUp = 'class="active"';
                break;
            case 'Login':
                $navLogin = 'class="active"';
                break;
        }
        break;
    case 'ShoppingCart':
        $navShoppingCart ='class="active"';
        break;
    default:
        break;
}

//Get user authentication info and update page
if (isset($_SESSION['user']))
{
    $username = $_SESSION['user'];
}
if (isset($username) && $username != '')
{
    if (isset($_GET['action']) && $_GET['action'] == 'logout')
    {
        $profileLink = '<a href="'.ROOT_DIR.'website/account/Account.php?page=Register"><span class="glyphicon glyphicon-user"></span> Sign Up</a>';
        $loginLink = '<a href="'.ROOT_DIR.'website/account/Account.php?page=Login"><span class="glyphicon glyphicon-log-in"></span> Login</a>';
    }
    else
    {
        $profileLink = '<a href="'.ROOT_DIR.'website/account/Account.php?page=Profile"><span class="glyphicon glyphicon-user"></span> Welcome, '.$username.'</a>';
        $loginLink = '<a href="'.ROOT_DIR.'website/account/Account.php?page=Login&action=logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a>';
    }
}
else
{
    $profileLink = '<a href="'.ROOT_DIR.'website/account/Account.php?page=Register"><span class="glyphicon glyphicon-user"></span> Sign Up</a>';
    $loginLink = '<a href="'.ROOT_DIR.'website/account/Account.php?page=Login"><span class="glyphicon glyphicon-log-in"></span> Login</a>';
}

//Get item quantity in shopping cart and update page
$lblCartQuantity = 0;
if (isset($_SESSION['shoppingCart']))
{
    $arrCart = $_SESSION['shoppingCart'];
}
if (isset($arrCart) && count($arrCart) != 0)
{
    foreach ($arrCart as $value)
    {
        $lblCartQuantity += $value;
    }
}

//for test only
//echo 'page name:'.$pageName;
?>
<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title?></title>
    <?php include (dirname(__FILE__).'/../framework/bootstrap.php');?>
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT_DIR.'website/css/StyleSheetMain.css';?>">
    <script type="text/javascript" rel="script" src="<?php echo ROOT_DIR.'website/scripts/main.js';?>"></script>
    <script type="text/javascript" rel="script" src="<?php echo ROOT_DIR.'website/scripts/validation.js';?>"></script>
</head>
<body>

<!--Navigation area-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo ROOT_DIR.'website/index.php';?>"><img class="logo" src="<?php echo ROOT_DIR.'website/images/QCLogo.png';?>"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li id="navHome" <?php echo $navHome;?>><a href="<?php echo ROOT_DIR.'website/index.php';?>">Home</a></li>
                <li id="navCatalog" <?php echo $navCatalog;?>><a href="<?php echo ROOT_DIR.'website/catalog/Caps.php';?>">Catalog</a></li>
                <li id="navContact" <?php echo $navContact;?>><a href="<?php echo ROOT_DIR.'website/about/About.php';?>">Contact</a></li>
                <li id="navAdmin" <?php echo $navAdmin;?>><a href="<?php echo ROOT_DIR.'website/admin/Admin.php';?>">Admin</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li id="navSignUp" <?php echo $navSignUp;?>><?php echo $profileLink;?></li>
                <li id="navLogin" <?php echo $navLogin;?>><?php echo $loginLink;?></li>
                <li id="navShoppingCart" <?php echo $navShoppingCart;?>>
                    <a href="<?php echo ROOT_DIR.'website/shopping/cart.php';?>">
                        <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;Shopping Cart&nbsp;<span class="badge qty-in-cart" id="cartQty"><?php echo $lblCartQuantity?></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--Content area-->
<div class="container"><?php include ($page_content);?></div>

<!--Footer area-->
<div id="footer" class="container-fluid">&copy;2016 - Quantity Caps, All rights reserved</div>

</body>
</html>