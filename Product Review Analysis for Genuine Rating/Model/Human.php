<?php
include_once "connect.php";
include_once "category.php";
include_once "Product.php";
class Human
{
    private $Name;
    private $Id;
    private $Password;
    private $Email;

    public function __construct()
    {

    }
    public function Login($username)
    {
        $Query = "SELECT email, password, usertypeid, user_email_status from users where Username='". $username ."'";
        $db_connection = Connect::getInstance()->getConnection();
        if ($result = $db_connection->query($Query)) 
        {
            if ($result->num_rows == 1) 
            {
                $row = $result->fetch_assoc();
                $arr['email'] = $row['email'];
                $arr['password'] = $row['password'];
                $arr['user_email_status'] = $row['user_email_status'];
                $arr['usertypeid'] = $row['usertypeid'];
                return $arr;
            }
            else{
                return 0 ;
            }
        }
    }
    // modified this function to return 1 if edit is successful and 0 otherwise
    public function editUserData($userTypeId, $userName, $Id, $Password, $Email,$feedback)
    {
        $Query = "UPDATE users SET UserName='" . $userName . "',Password='" . $Password . "',Email='" . $Email . "',UserTypeId='" . $userTypeId . "',Feedback='".$feedback."' WHERE Id ='" . $Id . "'";
        $db_connection = Connect::getInstance()->getConnection();
        if ($result = $db_connection->query($Query)) {
            return 1;
        } else {
            return 0;
        }
    }
    // this function returns an array having all categories
    // if failed returns 0
    public function viewCategories()
    {
        $all_categories = array();
        $Query = "SELECT * from category";
        $db_connection = Connect::getInstance()->getConnection();
        if ($result = $db_connection->query($Query)) {
            if ($result->num_rows > 0) {
                $counter = 0;
                while ($row = $result->fetch_assoc()) {
                    $category_name = $row['CategoryName'];
                    $category_id = $row['CategoryId'];
                    $curr_category = new Category();
                    $curr_category->setCategoryName($category_name);
                    $curr_category->setCategoryId($category_id);
                    $all_categories[$counter++] = $curr_category;
                }
                return $all_categories;
            } else {
                echo $db_connection->error;
                return 0;
            }
        }

    }
    public function __destruct()
    {}

    /*
    this function returns an array of products of the specified category and returns 0 if fail

     */

    public function viewProductsOfCategory($category_id)
    {
        $all_products = array();
        $query = "SELECT * from product WHERE CategoryId=" . $category_id;
        $db_connection = Connect::getInstance()->getConnection();
        if ($result = $db_connection->query($query)) {
            if ($result->num_rows > 0) {
                $counter = 0;
                while ($row = $result->fetch_assoc()) {
                    $current_product = new Product();
                    $current_product->setName($row['Name']);
                    $current_product->setSerialNumber($row['SerialNumber']);
                    $current_product->setPrice($row['Price']);
                    $current_product->setOtherInfo($row['Details']);
                    $current_product->setAverageRate($row['Rate']);
                    $current_product->setPicture($row['Picture']);
                    $all_products[$counter++] = $current_product;
                }
                return $all_products;
            } else {
                echo $db_connection->error;
                return 0;
            }
        }
    }
    /*
    this function takes a product id as paramater and returns an object of the product from database
    if successful and returns 0 otherwise
     */
    public function viewProduct($product_id)
    {
        $query = "SELECT * FROM product WHERE SerialNumber = " . $product_id;
        $db_connection = Connection::getInstance()->getConnection();
        if ($result = $db_connection->query($query)) {
            if ($row = $result->fetch_assoc()) {
                $product = new Product();
                $product->setName($row['Name']);
                $product->setAverageRate($row['Rate']);
                $product->setPrice($row['Price']);
                $product->setPicture($row['Picture']);
                $product->setOtherInfo($row['Details']);
                $product->setCategoryID($row['CategoryId']);
                $product->setSerialNumber($row['SerialNumber']);
                return $product;
            }
        } else {
            echo $db_connection->error;
            return 0;
        }
    }

    // this function below is to get the selected product details by taking the product id as paramater
    //public function getProductDetails($product_id){}
    public function __call($method, $parameter)
    { //this if the user call a method that not exist or not accessible
        echo "the method " . $method . " not found";
    }
    public function __get($prop)
    { //this if the user call a property that not exist or not accessible
        echo "the property " . $prop . " not found";
    }
    public function __set($prop, $value)
    { //this if the user call a property that not exist or not accessible
        echo "the property " . $prop . " not found or not accessible and the value " . $value;
    }
    //Start Setter
    public function setName($Name)
    {
        $this->Name = $Name;
    }
    public function setId($Id)
    {
        $this->Id = $Id;
    }
    public function setPassword($Password)
    {
        $this->Password = $Password;
    }
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }
    //End Setter

    //Start Getter
    public function getName()
    {
        return $this->Name;
    }
    public function getId()
    {
        return $this->Id;
    }
    public function getPassword()
    {
        return $this->Password;
    }
    public function getEmail()
    {
        return $this->Email;
    }
    //End Getter
}
