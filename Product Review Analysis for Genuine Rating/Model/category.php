<?php
class Category
{
    /*
    the lines i commented were giving me errors 
    */
    private $categoryName;
    private $categoryId;

    //private const products = array();   //        private static $products = array();

    public function __construct()
    {}

    //Setter & Getter Methods
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    }

    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    public function setCategoryDescription($categoryDescription)
    {
        $this->categoryDescription = $categoryDescription;
    }
    #############################################################################################
    /*
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
 */
}
