<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/11
 * Time: 0:46
 */
require_once (dirname(__FILE__).'/../../library/business_layer/business.inc.php');

$pageSize = 5;
$pageNo = 0;
$offset = 0;
$pageCount = 1;

if (isset($_GET['pageNo']))
{
    $pageNo = (int)$_GET['pageNo'];
    $offset = ($pageNo - 1) * $pageSize;
}

$business = new Business();

$counter = $business->getCapsQuantity();
$caps = $business->getCaps($offset, $pageSize);

while ($cap = $caps->fetch_assoc())
{
    $supplierID = $cap['SupplierID'];
    $categoryID = $cap['CategoryID'];
    $supplierName = $business->getSupplierName($supplierID);
    $categoryName = $business->getCategoryName($categoryID);

    $capList[] = '<tr>';
    $capList[] = '<td>'.$cap['CapID'].'</td>';
    $capList[] = '<td>'.$cap['CapName'].'</td>';
    $capList[] = '<td>'.$supplierName.'</td>';
    $capList[] = '<td>'.$categoryName.'</td>';
    $capList[] = '<td>$ '.$cap['Price'].'</td>';
    $capList[] = '<td><img src="'.$cap['ImagePath'].'" style="width:64px;" /></td>';
    $capList[] = '</tr>';
}

$pageCount = $counter / $pageSize + 1;
if ($pageCount > 1)
{
    $pageURL = dirname($_SERVER['REQUEST_URI']).'/Admin.php?page=CapManagement&pageNo=';
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
<div class="section-title"><span class="glyphicon glyphicon-cog"></span> Caps Management</div>
<div class="function-area">
    <div><input type="button" class="function-button" id="btnAddCap" value="Add a new cap" onclick="navToAddCap()" /></div>
</div>
<div class="cap-list">
    <table class="table table-hover" cellspacing="0" cellpadding="4" style="color:#333333;width:100%;border-collapse:collapse;">
        <thead>
        <tr style="color:White;background-color:#507CD1;font-weight:bold; height: 36px">
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Supplier</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
        </tr>
        </thead>
        <tbody>
        <?php echo join('', $capList);?>
        </tbody>
    </table>
</div>
<div class="paging"><ul class="pagination" id="lstPage"><?php echo join('', $pageList);?></ul></div>