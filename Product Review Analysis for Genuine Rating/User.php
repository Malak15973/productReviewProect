<?php
include_once "Human.php";
include_once "connect.php";

class User extends Human
{
    private $feedback;

    /*constructor*/
    public function __construct()
    {

    }
    /*
    just added a getter and setter for feedback
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;
    }
    public function getFeedback()
    {
        return $this->feedback;
    }

    /*Register*/
    public function Register($username, $password, $email)
    {
        $sql = "INSERT INTO users (firstname, lastname, email)VALUES ('$username', '$password', '$email')";
        $conn = Connect::getInstance()->getConnection();
        if ($conn->mysqli->query($sql)) {
            echo "register done";
        } else {
            echo "please try agian";
        }

    }
    public function RateProduct($numberofstars)
    {
        $recentrate = $numberofstars;
        $sql = "SELECT Rate FROM product";
        $conn = Connect::getInstance()->getConnection();
        $lastrate = $conn->mysqli->query($sql);
        $finalrate = ($recentrate + $lastrate) / 2;
        $sql2 = "INSERT INTO product (Rate)VALUES ('$finalrate')";
        if ($conn->mysqli->query($sql2)) {
            echo "rate done";
        } else {
            echo "please try agian";
        }
    }
    public function FeedBack($feedback)
    {
        $sql = "INSERT INTO users (Feedback)VALUES ('$feedback')";
        $conn = Connect::getInstance()->getConnection();
        if ($conn->mysqli->query($sql)) {
            echo "feedback done";
        } else {
            echo "please try agian";
        }
    }
    public function Login($username, $password)
    {
        $obj = new Human();
        $obj->Login($username, $password);
    }
    public function RateSeller($numberofstars)
    {
        $recentrate = $numberofstars;
        $sql = "SELECT SellerRate FROM seller";
        $conn = Connection::getInstance()->getConnection();
        $lastrate = $conn->mysqli->query($sql);
        $finalrate = ($recentrate + $lastrate) / 2;
        $sql2 = "INSERT INTO seller (SellerRate)VALUES ('$finalrate')";
        if ($conn->mysqli->query($sql2)) {
            echo "rate done";
        } else {
            echo "please try agian";
        }
    }

}
