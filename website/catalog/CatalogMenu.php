<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/12
 * Time: 12:29
 * Menu to navigate between different categories.
 */
require_once (dirname(__FILE__).'/../../library/business_layer/business.inc.php');

if (!isset($_GET['category']))
{
    $menuList[] = '<li class="active"><a href="Caps.php?category=All">All Caps</a></li>';
}
else
{
    if ($_GET['category'] == 'All')
    {
        $menuList[] = '<li class="active"><a href="Caps.php?category=All">All Caps</a></li>';
    }
    else
    {
        $menuList[] = '<li><a href="Caps.php?category=All">All Caps</a></li>';
    }
}

$business = new Business();
$categories = $business->getAllCategories();

while ($category = $categories->fetch_assoc())
{
    $categoryName = $category['CategoryName'];
    $categoryID = $category['CategoryID'];
    if (isset($_GET['category']) && $_GET['category'] == $categoryID)
    {
        $menuList[] = '<li class="active"><a href="Caps.php?category='.$categoryID.'">'.$categoryName.'</a></li>';
    }
    else
    {
        $menuList[] = '<li><a href="Caps.php?category='.$categoryID.'">'.$categoryName.'</a></li>';
    }
}
?>
<ul class="nav nav-pills nav-stacked side-menu" id="lstMenu">
    <?php echo join('', $menuList);?>
</ul>
