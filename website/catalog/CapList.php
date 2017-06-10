<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/12
 * Time: 12:52
 * Display caps list of different categories in pages with 12 caps in each page.
 */
require_once (dirname(__FILE__).'/../../library/business_layer/business.inc.php');

$business = new Business();

if (isset($_GET['category']))
{
    $categoryID = $_GET['category'];
    if ($categoryID == 'All')
    {
        $category = 'All';
    }
    else
    {
        $category = $business->getCategoryName($categoryID);
    }
}
else
{
    $categoryID = 'All';
    $category = 'All';
}

?>
<div class="section-title"><span class="glyphicon glyphicon-th"></span> <?php echo $category;?></div>
<?php
$pageSize = 12;
$pageNo = 0;
$offset = 0;
$pageCount = 1;

if (isset($_GET['pageNo']))
{
    $pageNo = (int)$_GET['pageNo'];
    $offset = ($pageNo - 1) * $pageSize;
}

$counter = $business->getCapsQuantityByCategory($categoryID);
$caps = $business->getCapsByCategory($categoryID, $offset, $pageSize);
while ($cap = $caps->fetch_assoc())
{
    $capID = $cap['CapID'];
    $capName = $cap['CapName'];
    $price = $cap['Price'];
    $imagePath = $cap['ImagePath'];
    include ('CapItem.php');
}

$pageCount = $counter / $pageSize + 1;
if ($pageCount > 1)
{
    $pageURL = dirname($_SERVER['REQUEST_URI']).'/Caps.php?category='.$categoryID.'&pageNo=';
    for ($i = 1; $i <= $pageCount; $i++)
    {
        if (!isset($_GET['pageNo']) && $i == 1)
        {
            $pageList[] = '<li class="active"><a href="'.$pageURL.$i.'"> '.$i.'</a></li>';
        }
        else
        {
            if (isset($_GET['pageNo']) && $_GET['pageNo'] == $i)
            {
                $pageList[] = '<li class="active"><a href="'.$pageURL.$i.'"> '.$i.'</a></li>';
            }
            else
            {
                $pageList[] = '<li><a href="'.$pageURL.$i.'"> '.$i.'</a></li>';
            }
        }
    }
}
?>
<div class="paging col-md-12"><ul class="pagination" id="lstPage"><?php echo join('', $pageList);?></ul></div>
