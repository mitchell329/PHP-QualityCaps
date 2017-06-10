<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/12
 * Time: 20:27
 * Update the items and quantity in the shopping cart
 */
session_start();

if (isset($_POST['capID']))
{
    $capID = $_POST['capID'];
}

if (isset($_SESSION['shoppingCart']))
{
    $arrCart = $_SESSION['shoppingCart'];
}
else
{
    echo 'error';
    exit;
}

if ($_POST['action'] == 'changeQuantity')
{
    changeQuantity();
    exit;
}
if ($_POST['action'] == 'removeItem')
{
    removeItem();
    exit;
}
if ($_POST['action'] == 'clearCart')
{
    unset($_SESSION['shoppingCart']);
    exit;
}

function changeQuantity()
{
    global $capID;
    global $arrCart;

    if (isset($_POST['adjust']))
    {
        $adjust = $_POST['adjust'];
    }
    else
    {
        echo 'error';
        exit;
    }

    foreach ($arrCart as $id => $qty)
    {
        if ($id == $capID)
        {
            $newQty = $qty + (int)$adjust;
            $arrCart[$id] = $newQty;
        }
    }
    $_SESSION['shoppingCart'] = $arrCart;
    echo $newQty;
}

function removeItem()
{
    global $capID;
    global $arrCart;

    foreach ($arrCart as $id => $qty)
    {
        if ($id == $capID)
        {
            unset($arrCart[$id]);
        }
    }
    $_SESSION['shoppingCart'] = $arrCart;
}