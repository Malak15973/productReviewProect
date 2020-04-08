<?php
include_once "Human.php" ;
include_once "connect.php" ;  

   class User extends Human
    {
      private $feedback;
      
    /*constructor*/
    public function __construct() {
        
    }
    
    /*Register*/
    Function Register($username,$password,$email)
    {
        $sql = "INSERT INTO users (firstname, lastname, email) VALUES ('".$username."', '".$password."', '"$email."')";
        $conn = new Connect();
        if($conn->mysqli->query($sql))
        {
            echo "register done";
        }
        else
        {
            echo "please try agian";
        }
        
    }
    Function ViewCatigory()
    {
         $sql= "SELECT CategoryName,CategoryId FROM category WHERE 1";
         $conn = new Connect();
         $result = $conn->mysqli->query($sql);
         if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "id: " . $row["CategoryId"] . " - Name: " . $row["CategoryName"] .  "<br>";
            }
        } else {
            echo "0 results";
        }
    }
    Function ViewProduct()
    {
         $sql= "SELECT SerialNumber,Name,Rate,Price	Picture,Details,CategoryId FROM product";
         $conn = new Connect();
         $result = $conn->mysqli->query($sql);
         if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "id: " . $row["CategoryId"] . " - Name: " . $row["CategoryName"] .  "<br>";
            }
        } else {
            echo "0 results";
        }
        
    }
    Function RateProduct($numberofstars)
    {
         $recentrate=$numberofstars;
         $sql= "SELECT Rate FROM product";
         $conn = new Connect();
         $lastrate = $conn->mysqli->query($sql);
         $finalrate=($recentrate+ $lastrate)/2;
         $sql2 = "INSERT INTO product (Rate)VALUES ('$finalrate')";
          if($conn->mysqli->query($sql2))
        {
            echo "rate done";
        }
        else
        {
            echo "please try agian";
        }       
    }
    Function FeedBack($feedback)
    {
        $sql = "INSERT INTO users (Feedback)VALUES ('$feedback')";
        $conn = new Connect();
          if($conn->mysqli->query($sql))
        {
            echo "feedback done";
        }
        else
        {
            echo "please try agian";
        }       
    }
     Function Login($username,$password)
     {
         $obj=new Human() ;
         $obj->Login($username,$password) ;
     }
      Function RateSeller($numberofstars)
    {
         $recentrate=$numberofstars;
         $sql= "SELECT SellerRate FROM seller";
         $conn = new Connect();
         $lastrate = $conn->mysqli->query($sql);
         $finalrate=($recentrate+ $lastrate)/2;
         $sql2 = "INSERT INTO seller (SellerRate)VALUES ('$finalrate')";
          if($conn->mysqli->query($sql2))
        {
            echo "rate done";
        }
        else
        {
            echo "please try agian";
        }       
    }
    
    }
    
?>
