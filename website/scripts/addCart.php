<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/9
 * Time: 23:55
 * Add a cap to shopping cart.
 */
session_start();

if (isset($_POST['capID']))
{
    //echo 'find data';
    //exit;

    $capID = $_POST['capID'];
    $itemExist = false;

    if (isset($_SESSION['shoppingCart']))
    {
        $arrCart = $_SESSION['shoppingCart'];
    }
    else
    {
        $arrCart = array();
    }
    if (isset($arrCart) && count($arrCart) != 0)
    {
        foreach ($arrCart as $id => $qty)
        {
            if ($id == $capID)
            {
                $arrCart[$id]++;
                $itemExist = true;
            }
        }
    }

    if (!$itemExist)
    {
        $arrCart[$capID] = 1;
    }

    $_SESSION['shoppingCart'] = $arrCart;
}
//echo 'added';