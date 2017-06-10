<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/8
 * Time: 21:49
 */
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

//Include database connection
require_once (dirname(__FILE__).'/credential.inc.php');

/**
 * Class Data
 * Implement queries on database
 */
class Data
{
    /**
     * @var mysqli
     */
    var $db;

    /**
     * Data constructor.
     */
    function Data()
    {
        global $db_host;
        global $db_username;
        global $db_password;
        global $db_name;

        $this->db = new mysqli($db_host, $db_username, $db_password, $db_name);

        if ($this->db->errno)
        {
            echo 'Database connection failed.';
            exit($this->db->error);
        }
    }

    /**
     * Get all users
     * @return bool|mysqli_result
     */
    function getAllUsers()
    {
        $sql = "SELECT * FROM user";
        $result = $this->db->query($sql);
        return $result;
    }

    /**
     * Get a certain amount of users from an offset numnber
     * @param $from
     * @param $count
     * @return bool|mysqli_result
     */
    function getUsers($from, $count)
    {
        $sql = "SELECT * FROM user LIMIT $from, $count";
        return $this->db->query($sql);
    }

    /**
     * Get user by user ID
     * @param $id
     * @return bool|mysqli_result
     */
    function getUserByID($id)
    {
        $sql = "SELECT * FROM user WHERE UserID=$id";
        $result = $this->db->query($sql);
        return $result;
    }

    /**
     * Get user by username
     * @param $username
     * @return bool|mysqli_result
     */
    function getUserByName($username)
    {
        $sql = "SELECT * FROM user WHERE username= '$username'";
        return $this->db->query($sql);
    }

    /**
     * Insert a new user record to database
     * @param $username
     * @param $password
     * @param $homePhone
     * @param $workPhone
     * @param $mobile
     * @param $email
     * @param $address
     * @return bool|mysqli_result
     */
    function insertUser($username, $password, $homePhone, $workPhone, $mobile, $email, $address)
    {
        $sql = "INSERT INTO user(Username, Password, HomePhone, WorkPhone, Mobile, Email, Address) VALUES ('$username', '$password', '$homePhone', '$workPhone', '$mobile', '$email', '$address')";
        return $this->db->query($sql);
    }

    /**
     * Update status of a given user
     * @param $userID
     * @param $newStatus
     * @return bool|mysqli_result
     */
    function updateUserStatus($userID, $newStatus)
    {
        $sql = "UPDATE user SET Enabled = $newStatus WHERE UserID = '$userID'";
        return $this->db->query($sql);
    }

    /**
     * Get all categories
     * @return bool|mysqli_result
     */
    function getAllCategories()
    {
        $sql = "SELECT * FROM category";
        return $this->db->query($sql);
    }

    /**
     * Get a certain amount of categories from an offset number
     * @param $from
     * @param $count
     * @return bool|mysqli_result
     */
    function getCategories($from, $count)
    {
        $sql = "SELECT * FROM category LIMIT $from, $count";
        return $this->db->query($sql);
    }

    /**
     * Insert a new category record to database
     * @param $categoryName
     * @return bool|mysqli_result
     */
    function insertCategory($categoryName)
    {
        $sql = "INSERT INTO category(CategoryName) VALUES ('$categoryName')";
        return $this->db->query($sql);
    }

    /**
     * Get the name of a given category
     * @param $categoryID
     * @return mixed
     */
    function getCategoryName($categoryID)
    {
        $sql = "SELECT * FROM category WHERE CategoryID = $categoryID";
        $result = $this->db->query($sql);
        while ($category = $result->fetch_assoc())
        {
            return $category['CategoryName'];
        }
    }

    /**
     * Get cap by cap ID
     * @param $capID
     * @return bool|mysqli_result
     */
    function getCapByID($capID)
    {
        $sql = "SELECT * FROM cap WHERE CapID = $capID";
        return $this->db->query($sql);
    }

    /**
     * Get cap details information with category name and supplier name of a given cap
     * @param $capID
     * @return bool|mysqli_result
     */
    function getCapDetails($capID)
    {
        $sql = "SELECT CapName, CategoryName, SupplierName, Price, Description, ImagePath 
                FROM cap, category, supplier 
                WHERE cap.CapID = $capID 
                AND cap.CategoryID = category.CategoryID 
                AND cap.SupplierID = supplier.SupplierID";
        return $this->db->query($sql);
    }

    /**
     * Get a certain amount of caps from an offset number
     * @param $from
     * @param $count
     * @return bool|mysqli_result
     */
    function getCaps($from, $count)
    {
        $sql = "SELECT * FROM cap LIMIT $from, $count";
        return $this->db->query($sql);
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
        if (isset($from) && isset($count))
        {
            $sql = "SELECT * FROM cap WHERE CategoryID = $categoryID LIMIT $from, $count";
        }
        else
        {
            $sql = "SELECT * FROM cap WHERE CategoryID = $categoryID";
        }
        //$sql = "SELECT * FROM cap WHERE CategoryID = $categoryID LIMIT $from, $count";
        return $this->db->query($sql);
    }

    /**
     * Get all caps
     * @return bool|mysqli_result
     */
    function getAllCaps()
    {
        $sql = "SELECT * FROM cap";
        return $this->db->query($sql);
    }

    /**
     * Insert a new cap record to database
     * @param $capName
     * @param $supplierID
     * @param $categoryID
     * @param $price
     * @param $description
     * @param $imagePath
     * @return bool|mysqli_result
     */
    function insertCap($capName, $supplierID, $categoryID, $price, $description, $imagePath)
    {
        $sql = "INSERT INTO cap(CapName, SupplierID, CategoryID, Price, Description, ImagePath) VALUES ('$capName', $supplierID, $categoryID, $price, '$description', '$imagePath')";
        return $this->db->query($sql);
    }

    /**
     * Get the name of a given supplier
     * @param $supplierID
     * @return mixed
     */
    function getSupplierName($supplierID)
    {
        $sql = "SELECT * FROM supplier WHERE supplierID = $supplierID";
        $result = $this->db->query($sql);
        while ($supplier = $result->fetch_assoc())
        {
            return $supplier['SupplierName'];
        }
    }

    /**
     * Get all suppliers
     * @return bool|mysqli_result
     */
    function getAllSupplier()
    {
        $sql = "SELECT * FROM supplier";
        return $this->db->query($sql);
    }

    /**
     * Insert a new order record to database
     * @param $customerID
     * @param $subtotal
     * @param $GST
     * @param $grandTotal
     * @param $status
     * @return bool|mixed
     */
    function insertOrder($customerID, $subtotal, $GST, $grandTotal, $status)
    {
        $sql = "INSERT INTO `order`(CustomerID, Subtotal, GST, GrandTotal, Status) VALUES ($customerID, $subtotal, $GST, $grandTotal, '$status')";

        if ($this->db->query($sql))
        {
            return $this->db->insert_id;
        }
        else{
            return false;
        }
    }

    /**
     * Get all the orders of a user
     * @param $userID
     * @return bool|mysqli_result
     */
    function getOrdersByUser($userID)
    {
        $sql = "SELECT * FROM `order` WHERE CustomerID = $userID";
        return $this->db->query($sql);
    }

    /**
     * Get all the orders
     * @return bool|mysqli_result
     */
    function getAllOrders()
    {
        $sql = "SELECT OrderID, Username, Subtotal, GST, GrandTotal, Status FROM `order`, `user` WHERE `order`.CustomerID = `user`.UserID";
        return $this->db->query($sql);
    }

    /**
     * Insert an order item record to a given order
     * @param $orderID
     * @param $itemID
     * @param $qty
     * @return bool|mysqli_result
     */
    function insertOrderItem($orderID, $itemID, $qty)
    {
        $sql = "INSERT INTO orderitem(OrderID, ItemID, Quantity) VALUES ($orderID, $itemID, $qty)";
        return $this->db->query($sql);
    }

    /**
     * Update status of a given order
     * @param $orderID
     * @param $newStatus
     * @return bool|mysqli_result
     */
    function updateOrderStatus($orderID, $newStatus)
    {
        $sql = "UPDATE `order` SET Status = '$newStatus' WHERE OrderID = $orderID";
        return $this->db->query($sql);
    }
}
