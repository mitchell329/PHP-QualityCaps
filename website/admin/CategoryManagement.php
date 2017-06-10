<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/11
 * Time: 0:46
 */
require_once (dirname(__FILE__).'/../../library/business_layer/business.inc.php');

$business = new Business();

if (isset($_POST['txtCategory']))
{
    $categoryName = $_POST['txtCategory'];
    if ($business->isCategoryExist($categoryName))
    {
        echo '<script>alert(\'Add category failed: the category has already existed.\');</script>';
    }
    else
    {
        $business->addCategory($categoryName);
        $dir = dirname(__FILE__).'/../images/caps/'.strtolower($categoryName);
        if (!is_dir($dir))
        {
            mkdir($dir);
        }

    }
}

$pageSize = 10;
$pageNo = 0;
$offset = 0;
if (isset($_GET['pageNo']))
{
    $pageNo = $_GET['pageNo'];
    $offset = ($pageNo - 1) * $pageSize;
}


$categories = $business->getCategories($offset, $pageSize);

while ($category = $categories->fetch_assoc())
{
    $categoryList[] = '<tr>';
    $categoryList[] = '<td>'.$category['CategoryID'].'</td>';
    $categoryList[] = '<td>'.$category['CategoryName'].'</td>';
    $categoryList[] = '</tr>';
}

?>
<div class="section-title"><span class="glyphicon glyphicon-th-list"></span> Category Management</div>
<div class="row function-area">
    <form method="post" action="">
        <label class="function-label col-md-3" for="txtCategory">Add a category:</label>
        <div class="col-md-3"><input type="text" id="txtCategory" name="txtCategory" class="form-control" /></div>
        <div class="col-md-1"><input type="submit" class="function-button" id="btnAddCategory" value="Save" /></div>
    </form>
</div>
<div class="category-list">
    <table class="table table-hover" cellspacing="0" cellpadding="4" style="color:#333333;width:60%;border-collapse:collapse;">
        <thead>
        <tr style="color:White;background-color:#507CD1;font-weight:bold; height: 36px">
            <th scope="col">ID</th>
            <th scope="col">Name</th>
        </tr>
        </thead>
        <tbody>
        <?php echo join('', $categoryList);?>
        </tbody>
    </table>
</div>
