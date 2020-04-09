<?php
include_once "Human.php";
class Admin extends Human
{
    /*
    function that adds a product to the database taking an object of product as paramater
    returns 1 if successful and 0 otherwise
     */
    public function addProduct($product)
    {
        $serial_number = $product->getSerialNumber();
        $name = $product->getName();
        $rate = $product->getAverageRating();
        $price = $product->getPrice();
        $picture = $product->getPicture();
        $details = $product->getOtherInfo();
        $category_id = $product->getCategoryID();
        $query = "INSERT INTO `product` (`SerialNumber`, `Name`, `Rate`, `Price`, `Picture`, `Details`, `CategoryId`)
        VALUES (?, ?, ?, ?, ?, ?, ?);";

        $db_connection = Connect::getInstance()->getConnection();
        $prepared_statement = mysqli_prepare($db_connection, $query);
        mysqli_stmt_bind_param($prepared_statement, "isddssi", $serial_number, $name, $rate, $price
            , $picture, $details, $category_id);
        if ($result = mysqli_stmt_execute($prepared_statement)) {
            return 1;
        } else {
            echo $db_connection->error;
            return 0;
        }
    }
    /*
    this function edits a specific product taking an object of the updated product and the serial number
    returns 1 if successful and 0 otherwise
     */
    public function editProduct($serialNumber, $product)
    {
        $name = $product->getName();
        $rate = $product->getAverageRating();
        $price = $product->getPrice();
        $picture = $product->getPicture();
        $details = $product->getOtherInfo();
        $query = "UPDATE product SET Name = '" . $name . "' , Rate = '" . $rate . "' , Price = '"
            . $price . "' , Picture = '" . $picture . "' , Details = '" . $details .
            "' WHERE SerialNumber = '" . $serialNumber . "';";
        $db_connection = Connect::getInstance()->getConnection();

        if ($result = $db_connection->query($query)) {
            return 1;
        } else {
            echo $db_connection->error;
            return 0;
        }
    }
    /*
    this function adds a category taking an object of category
    returns 1 if successful and 0 otherwise
     */
    public function addCategory($category)
    {
        $name = $category->getCategoryName();
        $query = "INSERT INTO `category` (`CategoryName`, `CategoryId`) VALUES (?, NULL);";
        $db_connection = Connect::getInstance()->getConnection();
        $prepared_statement = mysqli_prepare($db_connection, $query);
        mysqli_stmt_bind_param($prepared_statement, "s", $name);
        if ($result = mysqli_stmt_execute($prepared_statement)) {
            return 1;
        } else {
            echo $db_connection->error;
            return 0;
        }
    }
    /*
    this function deletes a specific category taking the category id as paramater
    returns 1 if successful and 0 otherwise
     */
    public function deleteCategory($category_id)
    {
        $query = "DELETE FROM category WHERE CategoryId = " . $category_id;
        $db_connection = Connect::getInstance()->getConnection();
        if ($result = $db_connection->query($query)) {
            return 1;
        } else {
            echo $db_connection->error;
            return 0;
        }
    }
    /*
    this function returns an array of having all users recorded in the database and returns 0 if fail
     *Note: the returned users doesn't have their passwords set
     */
    public function viewUsers()
    {
        $all_users = array();
        $query = "SELECT UserName,Id,Email,Feedback FROM users WHERE UserTypeId <> 1";
        $db_connection = Connect::getInstance()->getConnection;
        if ($result = $db_connection->query($query)) {
            if ($result->num_rows > 0) {
                $counter = 0;
                while ($row = $result->fetch_assoc()) {
                    $user = new User();
                    $user->setName($row['UserName']);
                    $user->setID($row['Id']);
                    $user->setEmail($row['Email']);
                    $user->setFeedback($row['Feedback']);
                    $all_users[$counter++] = $user;
                }
                return $all_users;
            }
        } else {
            echo $db_connection->error;
            return 0;
        }
    }
}
