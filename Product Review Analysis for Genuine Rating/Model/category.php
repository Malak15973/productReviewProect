<?php
    include 'product.php';
    include 'connect.php';
    
    class Category
    {
        private $categoryName;
        private $categoryId;
        private $categoryDescription;
        
        private const products = array();   //        private static $products = array();

        //Setter & Getter Methods
        function getCategoryName() {
            return $this->categoryName;
        }

        function getCategoryId() {
            return $this->categoryId;
        }

        function getCategoryDescription() {
            return $this->categoryDescription;
        }

        function setCategoryName($categoryName) {
            $this->categoryName = $categoryName;
        }

        function setCategoryId($categoryId) {
            $this->categoryId = $categoryId;
        }

        function setCategoryDescription($categoryDescription) {
            $this->categoryDescription = $categoryDescription;
        }
        #############################################################################################
        
        static function getDataFromDb2($categoryId) {
            $connect = new ConnectDatabase();
            //Or Select *
            $Query = "SELECT `SerialNumber`, `Name` FROM `product` WHERE categoryId='".$categoryId."'";  
            $check = $connect->getConn()->query($Query);
            
            if ($check->num_rows > 0) {
                $result = mysqli_query($connect->getConn(),$Query) or die(mysqli_error()); 
                while($row = mysqli_fetch_assoc($result)) 
                {
                    $products[] = $row;
                }
                return $products;
            }
        }       
           
    }
    
    //For Testing
    $obj = new Category();
    echo '<pre>';
    print_r($obj->getDataFromDb2(1));
    echo '</pre>';
    
