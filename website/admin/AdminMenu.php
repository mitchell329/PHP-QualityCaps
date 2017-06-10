<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/11
 * Time: 11:41
 * Menu for all the admin pages
 */
if (isset($_GET['page']))
{
    $page_name = $_GET['page'];
}
elseif (isset($_POST['page']))
{
    $page_name = $_POST['page'];
}
else
{
    $page_name = 'CapManagement';
}

switch ($page_name)
{
    case 'CategoryManagement':
        $menuCategory = 'class="active"';
        break;
    case 'CustomerManagement':
        $menuCustomer = 'class="active"';
        break;
    case 'OrderManagement':
        $menuOrder = 'class="active"';
        break;
    default:
        $menuCap = 'class="active"';
        break;
}

?>
<ul class="nav nav-pills nav-stacked side-menu" id="lstMenu">
    <li id="menuCap" <?php echo $menuCap;?>><a href="Admin.php?page=CapManagement">Caps Management</a></li>
    <li id="menuCategory" <?php echo $menuCategory;?>><a href="Admin.php?page=CategoryManagement">Category Management</a></li>
    <li id="menuCustomer" <?php echo $menuCustomer;?>><a href="Admin.php?page=CustomerManagement">Customer Management</a></li>
    <li id="menuOrder" <?php echo $menuOrder;?>><a href="Admin.php?page=OrderManagement">Order Management</a></li>
</ul>
