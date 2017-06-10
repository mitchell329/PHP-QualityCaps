<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/11
 * Time: 0:47
 */
require_once (dirname(__FILE__).'/../../library/business_layer/business.inc.php');

$pageSize = 20;
$pageNo = 0;
$offset = 0;
if (isset($_GET['pageNo']))
{
    $pageNo = $_GET['pageNo'];
    $offset = ($pageNo - 1) * $pageSize;
}

$business = new Business();
$users = $business->getUsers($offset, $pageSize);

while ($user = $users->fetch_assoc())
{
    if ($user['Enabled'])
    {
        $enabled = 'checked';
    }
    else
    {
        $enabled = '';
    }
    $customerList[] = '<tr>';
    $customerList[] = '<td>'.$user['UserID'].'</td>';
    $customerList[] = '<td>'.$user['Username'].'</td>';
    $customerList[] = '<td>'.$user['HomePhone'].'</td>';
    $customerList[] = '<td>'.$user['WorkPhone'].'</td>';
    $customerList[] = '<td>'.$user['Mobile'].'</td>';
    $customerList[] = '<td>'.$user['Email'].'</td>';
    $customerList[] = '<td>'.$user['Address'].'</td>';
    $customerList[] = '<td><input type="checkbox" onchange="disableAccount('.$user['UserID'].', '."'".$user['Username']."'".', '.$user['Enabled'].')" '.$enabled.'></td>';
    $customerList[] = '</tr>';
}

?>
<div class="section-title"><span class="glyphicon glyphicon-user"></span> Customer Management</div>
<div class="customer-list">
    <table class="table table-hover" cellspacing="0" cellpadding="4" style="color:#333333;width:100%;border-collapse:collapse;">
        <thead>
        <tr style="color:White;background-color:#507CD1;font-weight:bold; height: 36px">
            <th scope="col">ID</th>
            <th scope="col">Username</th>
            <th scope="col">Home Phone</th>
            <th scope="col">Work Phone</th>
            <th scope="col">Mobile</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Enabled</th>
        </tr>
        </thead>
        <tbody>
        <?php echo join('', $customerList);?>
        </tbody>
    </table>
</div>
