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


      $q="SELECT CategoryName FROM category ";
      $db_connection = Connect::getInstance()->getConnection();
        if ($result = $db_connection->query($q)) {

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
  function showProductCategory($prodctSerialNumber){
      $q="SELECT CategoryId FROM product where SerialNumber ='".$prodctSerialNumber."' ";
      $db_connection = Connect::getInstance()->getConnection();
        if ($result = $db_connection->query($q)) {

            $check=mysqli_num_rows($result);
              if($check>0)
              {
                  while($row=mysqli_fetch_assoc($result))
                  {
                     return $row ;

                  }

              }
        }
  }
  function CompareTwoProduct($userId,$productSerialNumber1,$productSerialNumber2,$review1,$review2,$Rate1,$Rate2){
    $Category1=$this->showProductCategory($productSerialNumber1);
    $Category2=$this->showProductCategory($productSerialNumber2);
    if($Category1['CategoryId']===$Category2['CategoryId']){
        $Query1="INSERT INTO rate VALUES('".$productSerialNumber1."','".$userId."','".$Rate1."','".$review1."')" ;
        $Query2="INSERT INTO rate VALUES('".$productSerialNumber2."','".$userId."','".$Rate2."','".$review2."')" ;
        $obj=Connect::getInstance()->getConnection();
        if ($result = $obj->query($Query1)&&$result2 = $obj->query($Query2)) {
            echo "Products reviewd";
        }else{
          echo "Products not reviewd";
        }

    }else{
      echo "Not The Same Category"; 
    }
  }
  function __construct() {

  }


}