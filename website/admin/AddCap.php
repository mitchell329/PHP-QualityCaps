<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/11
 * Time: 21:26
 */
require_once (dirname(__FILE__).'/../../library/business_layer/business.inc.php');

$business = new Business();

$categories = $business->getAllCategories();
while ($category = $categories->fetch_assoc())
{
    $categoryList[] = '<option value="'.$category['CategoryID'].'">'.$category['CategoryName'].'</option>';
}

$suppliers = $business->getAllSupplier();
while ($supplier = $suppliers->fetch_assoc())
{
    $supplierList[] = '<option value="'.$supplier['SupplierID'].'">'.$supplier['SupplierName'].'</option>';
}

if (isset($_POST['txtCapName'], $_POST['ddlCategory'], $_POST['ddlSupplier'], $_POST['txtPrice'], $_POST['txtDescription']))
{
    if (!isset($_FILES['filCapImage']))
    {
        echo '<script>alert("Please select an image for the cap.");</script>';
    }
    else
    {
        $capName = $_POST['txtCapName'];
        $categoryID = (int)$_POST['ddlCategory'];
        $supplierID = (int)$_POST['ddlSupplier'];
        $price = (float)$_POST['txtPrice'];
        $description = $_POST['txtDescription'];

        $categoryName = strtolower($business->getCategoryName($categoryID));
        $imagePath = '../images/caps/'.$categoryName.'/'.$_FILES['filCapImage']['name'];
        move_uploaded_file($_FILES['filCapImage']['tmp_name'], $imagePath);

        if ($business->addCap($capName, $supplierID, $categoryID, $price, $description, $imagePath))
        {
            echo "<script>alert('Cap has been added successfully.');</script>";
        }
    }

}
?>
<div class="add-title" id="pageHeading">Add Cap</div>
<form id="frmMain" method="post" enctype="multipart/form-data" action="">
    <div class="col-md-8">
        <div class="form-group row">
            <label class="control-label col-md-3" for="txtCapName">Cap Name:</label>
            <div class="col-md-5">
                <input type="text" class="form-control" id="txtCapName" name="txtCapName" />
            </div>
            <div class="col-md-4 validation-alert">*</div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3" for="filCapImage">Image:</label>
            <div class="col-md-5">
                <input type="file" class="img-upload" name="filCapImage" id="filCapImage" onchange="loadCapImage(this)">
            </div>
            <div class="col-md-4 validation-alert">*</div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3" for="ddlCategory">Category:</label>
            <div class="col-md-5">
                <select class="form-control" id="ddlCategory" name="ddlCategory">
                    <?php echo join('', $categoryList);?>
                </select>
            </div>
            <div class="col-md-4 validation-alert">*</div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3" for="ddlSupplier">Supplier:</label>
            <div class="col-md-5">
                <select class="form-control" id="ddlSupplier" name="ddlSupplier">
                    <?php echo join('', $supplierList);?>
                </select>
            </div>
            <div class="col-md-4 validation-alert">*</div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3" for="txtPrice">Price:</label>
            <div class="col-md-5 div-input">
                <span>$ </span>
                <input type="text" class="form-control price-input" id="txtPrice" name="txtPrice" />
            </div>
            <div class="col-md-4 validation-alert">*</div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3" for="txtDescription">Description:</label>
            <div class="col-md-9 div-input">
                <textarea id="txtDescription" class="form-control description-input" rows="5" name="txtDescription"></textarea>
                <span class="validation-alert">*</span>
            </div>
        </div>
        <div class="col-md-offset-5 col-md-7 validation-alert" id="validationResult"></div>
        <div class="col-md-offset-5 col-md-7 button-group">
            <input type="button" id="btnSaveCap" value="Save" onclick="btnSaveCap_OnClick()" />
            <input type="button" id="btnCancel" value="Cancel" onclick="backToCapManagement()" />
        </div>
    </div>
    <div class="col-md-4" id="imgCap">
        <img class="cap-thumbnail" id="capImage" src="../images/caps/imagePlaceHolder.png" />
    </div>
</form>

