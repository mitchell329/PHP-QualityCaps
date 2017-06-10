<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/8
 * Time: 22:00
 */

//Include data layer
require_once (dirname(__FILE__).'/../data_layer/data.inc.php');

/**
 * Class Business
 * Provide functions which are available for web pages.
 */
class Business
{
    /**
     * @var Data
     */
    var $data;

    /**
     * Business constructor.
     * Initialize a data object.
     */
    function Business()
    {
        try
        {
            $this->data = new Data();
        }
        catch (mysqli_sql_exception $exception)
        {
            echo $exception;
        }
    }

    /**
     * Get a certain count of users from database with an offset number.
     * @param $from |the offset number
     * @param $count |the amount of users to be returned
     * @return bool|mysqli_result
     */
    function getUsers($from, $count)
    {
        return $this->data->getUsers($from, $count);
    }


    /**
     * Check whether the username exists in the 'user' table
     * @param $username
     * @return bool
     */
    function isUserExist($username)
    {
        $allUsers = $this->data->getAllUsers();
        while ($user = $allUsers->fetch_assoc())
        {
            if ($user['Username'] == $username)
            {
                return true;
            }
        }
        return false;
    }

    /**
     * Get a user with given username.
     * @param $username
     * @return bool|mysqli_result
     */
    function getUserByName($username)
    {
        return $this->data->getUserByName($username);
    }

    /**
     * Save a new user to the database.
     * @param $username
     * @param $password
     * @param $homePhone
     * @param $workPhone
     * @param $mobile
     * @param $email
     * @param $address
     * @return bool
     */
    function saveUser($username, $password, $homePhone, $workPhone, $mobile, $email, $address)
    {
        $now = new DateTime();
        if ($this->data->insertUser($username, $password, $homePhone, $workPhone, $mobile, $email, $address))
        {
            $data = ($now->format('Y-m-d H:i:s'))." Registration success. Username: $username\n";
            file_put_contents(dirname(__FILE__).'/../../website/logs/log.txt', $data, FILE_APPEND | LOCK_EX);

            return true;
        }
        else
        {
            $data = ($now->format('Y-m-d H:i:s'))." Registration failed. Username: $username\n";
            file_put_contents(dirname(__FILE__).'/../../website/logs/log.txt', $data, FILE_APPEND | LOCK_EX);
            return false;
        }
    }

    /**
     * Disable or enable a user account.
     * @param $userID
     * @param $enabled
     * @return bool|mysqli_result
     */
    function disableAccount($userID, $enabled)
    {
        if ($enabled)
        {
            $newStatus = 0;
        }
        else
        {
            $newStatus = 1;
        }
        return $this->data->updateUserStatus($userID, $newStatus);
    }

    /**
     * Send an email
     * @param $address
     * @param $username
     * @param $password
     */
    function sendEmail($address, $username, $password)
    {
        $subject = 'Registration notification from Quality Caps';
        $message = "Thank you for your registration. Please remember you username and password: \n\nUsername: $username\nPassword: $password";
        $header = 'From: yuans06@myunitec.ac.nz';
        if (!mail($address, $subject, $message, $header))
        {
            $now = new DateTime();
            $data = ($now->format('Y-m-d H:i:s'))." Send email failed. Username: $username\n";
            file_put_contents(dirname(__FILE__).'/../../website/logs/log.txt', $data, FILE_APPEND | LOCK_EX);
        }
    }

    /**
     * Check whether username exists and matches password.
     * @param $username
     * @param $password
     * @return string
     */
    function validateLogin($username, $password)
    {
        if ($username == 'admin')
        {
            if ($password == 'admin')
                return 'success';
            else
                return 'wrong password';
        }
        else
        {
            $allUsers = $this->data->getAllUsers();
            while ($user = $allUsers->fetch_assoc())
            {
                if ($user['Username'] == $username)
                {
                    if ($user['Enabled'] == false)
                    {
                        return 'disabled';
                    }
                    if ($user['Password'] == $password)
                    {
                        return 'success';
                    }
                    else
                    {
                        return 'wrong password';
                    }
                }
            }
            return 'not exist';
        }
    }

    /**
     * Get user ID given username
     * @param $username
     * @return mixed
     */
    function getUserID($username)
    {
        $users = $this->data->getUserByName($username);
        while ($user = $users->fetch_assoc())
        {
            $id = $user['UserID'];
        }
        return $id;
    }

    /**
     * Get all the categories from database
     * @return bool|mysqli_result
     */
    function getAllCategories()
    {
        return $this->data->getAllCategories();
    }

    /**
     * Get a certain amount of categories from an offset number
     * @param $from
     * @param $count
     * @return bool|mysqli_result
     */
    function getCategories($from, $count)
    {
        return $this->data->getCategories($from, $count);
    }

    /**
     * Check whether given category name exists in the database
     * @param $categoryName
     * @return bool
     */
    function isCategoryExist($categoryName)
    {
        $allCategories = $this->data->getAllCategories();
        while ($category = $allCategories->fetch_assoc())
        {
            if ($category['CategoryName'] == $categoryName)
            {
                return true;
            }
        }
        return false;
    }

    /**
     * Add a new category to database
     * @param $categoryName
     * @return bool|mysqli_result
     */
    function addCategory($categoryName)
    {
        return $this->data->insertCategory($categoryName);
    }

    /**
     * Get category name by category ID
     * @param $categoryID
     * @return mixed
     */
    function getCategoryName($categoryID)
    {
        return $this->data->getCategoryName($categoryID);
    }

    /**
     * Get cap by cap ID
     * @param $capID
     * @return bool|mysqli_result
     */
    function getCapByID($capID)
    {
        return $this->data->getCapByID($capID);
    }

    /**
     * Get cap details by cap ID
     * @param $capID
     * @return bool|mysqli_result
     */
    function getCapDetails($capID)
    {
        return $this->data->getCapDetails($capID);
    }

    /**
     * Get a certain amount of caps from an offset number
     * @param $from
     * @param $count
     * @return bool|mysqli_result
     */
    function getCaps($from, $count)
    {
        return $this->data->getCaps($from, $count);
    }

    /**
     * Get a certain amount of caps of given category from an offset number
     * @param $categoryID
     * @param $from
     * @param $count
     * @return bool|mysqli_result
     */
    function getCapsByCategory($categoryID, $from, $count)
    {
        if ($categoryID == 'All')
        {
            return $this->data->getCaps($from, $count);
        }
        else
        {
            return $this->data->getCapsByCategory($categoryID, $from, $count);
        }
    }

    /**
     * Get total quantity of all the caps
     * @return int
     */
    function getCapsQuantity()
    {
        return mysqli_num_rows($this->data->getAllCaps());
    }

    /**
     * Get total quantity of cap of a given category
     * @param $categoryID
     * @return int
     */
    function getCapsQuantityByCategory($categoryID)
    {
        if ($categoryID == 'All')
        {
            return $this->getCapsQuantity();
        }
        else
        {
            return mysqli_num_rows($this->data->getCapsByCategory($categoryID));
        }
    }

    /**
     * Get the price of a given cap
     * @param $capID
     * @return mixed
     */
    function getCapPrice($capID)
    {
        $caps = $this->data->getCapByID($capID);
        while ($cap = $caps->fetch_assoc())
        {
            $price = $cap['Price'];
        }
        return $price;
    }

    /**
     * Save a new cap to the database
     * @param $capName
     * @param $supplierID
     * @param $categoryID
     * @param $price
     * @param $description
     * @param $imagePath
     * @return bool|mysqli_result
     */
    function addCap($capName, $supplierID, $categoryID, $price, $description, $imagePath)
    {
        return $this->data->insertCap($capName, $supplierID, $categoryID, $price, $description, $imagePath);
    }

    /**
     * Get the name of given supplier
     * @param $supplierID
     * @return mixed
     */
    function getSupplierName($supplierID)
    {
        return $this->data->getSupplierName($supplierID);
    }

    /**
     * Get all suppliers
     * @return bool|mysqli_result
     */
    function getAllSupplier()
    {
        return $this->data->getAllSupplier();
    }

    /**
     * Save a new order record to the database
     * @param $username
     * @param $subtotal
     * @param $GST
     * @param $grandTotal
     * @param $status
     * @return bool|mixed
     */
    function placeOrder($username, $subtotal, $GST, $grandTotal, $status)
    {
        $users = $this->data->getUserByName($username);
        while ($user = $users->fetch_assoc())
        {
            $userID = $user['UserID'];
        }
        return $this->data->insertOrder($userID, $subtotal, $GST, $grandTotal, $status);
    }

    /**
     * Get all the orders of a given user
     * @param $userID
     * @return bool|mysqli_result
     */
    function getOrderByUser($userID)
    {
        return $this->data->getOrdersByUser($userID);
    }

    /**
     * Get all orders
     * @return bool|mysqli_result
     */
    function getAllOrders()
    {
        return $this->data->getAllOrders();
    }

    /**
     * Save cap ID and quantity of an order to database
     * @param $orderID
     * @param $capID
     * @param $qty
     * @return bool|mysqli_result
     */
    function createOrderItem($orderID, $capID, $qty)
    {
        return $this->data->insertOrderItem($orderID, $capID, $qty);
    }

    /**
     * Update status of a given order
     * @param $orderID
     * @param $newStatus
     * @return bool|mysqli_result
     */
    function updateOrderStatus($orderID, $newStatus)
    {
        return $this->data->updateOrderStatus($orderID, $newStatus);
    }
}