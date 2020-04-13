<?php

include_once "Human.php" ;
include_once "connect.php";

class User extends Human {


  function Register($username,$mail,$password,$id,$type)
  {

      $q="INSERT INTO `users` (`UserName`, `Password`, `Id`, `Email`, `UserTypeId`, `Feedback`) VALUES ('$username', '$password','$id', '$mail', '$type', '');";
     $db_connection = Connect::getInstance()->getConnection();
        if ($result = $db_connection->query($q)) {

          echo "done";
      }
      else{
          echo "error";
      }
  }
  function feedback($feedback,$userid)
  {

       $q="UPDATE users SET Feedback = '$feedback' WHERE Id = '$userid'";
       $db_connection = Connect::getInstance()->getConnection();
        if ($result = $db_connection->query($q)) {

            echo "done";
      }
      else{
          echo "error";
      }
  }
  function Rateproduct($myrate,$id)
  {

      $rate;
      $q="SELECT Rate FROM product where SerialNumber='$id'; ";
      $db_connection = Connect::getInstance()->getConnection();
      if ($result = $db_connection->query($q)) {

        $check=mysqli_num_rows($result);
          if($check>0)
          {
              while($row=mysqli_fetch_assoc($result))
              {
                 $rate=$row['Rate'];
              }

          }
        }
        $finalrate=($rate+$myrate)/2;
        $q="UPDATE product SET Rate = '$finalrate' WHERE SerialNumber= '$id'";
        $db_connection = Connect::getInstance()->getConnection();
        if ($result = $db_connection->query($q)) {

          echo "done";
      }
      else{
          echo "error";
      }


  }
  function Rateseller($myrate,$id)
  {

      $rate;
      $q="SELECT SellerRate FROM seller where Id='$id'; ";
      $db_connection = Connect::getInstance()->getConnection();
        if ($result = $db_connection->query($q)) {

        $check=mysqli_num_rows($result);
          if($check>0)
          {
              while($row=mysqli_fetch_assoc($result))
              {
                 $rate=$row['SellerRate'];
              }

          }
        }

        $finalrate=($rate+$myrate)/2;
        $q="UPDATE seller SET SellerRate = '$finalrate' WHERE id = '$id'";
        $db_connection = Connect::getInstance()->getConnection();
        if ($result = $db_connection->query($q)) {

          echo "done";
      }
      else{
          echo "error";
      }

  }
  function showproduct()
  {


      $q="SELECT Name,Picture FROM product; ";
      $db_connection = Connect::getInstance()->getConnection();
        if ($result = $db_connection->query($q)) {

        $check=mysqli_num_rows($result);
          if($check>0)
          {
              while($row=mysqli_fetch_assoc($result))
              {
                 echo $row['Name']."<br/>";
                 echo $row['Picture']."<hr>";
              }

          }
        }
  }
    function showcategory()
  {


      $q="SELECT CategoryName FROM category; ";
      $db_connection = Connect::getInstance()->getConnection();
        if ($result = $db_connection->query($query)) {

            $check=mysqli_num_rows($result);
              if($check>0)
              {
                  while($row=mysqli_fetch_assoc($result))
                  {
                     echo $row['CategoryName']."<hr>";

                  }

              }
        }
  }
  function __construct() {

  }


}