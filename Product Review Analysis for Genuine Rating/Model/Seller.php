<?php
include_once "Human.php" ;
include_once "connect.php" ;
class Seller extends Human{
	private $sellerPhone ;
	private $sellerRate  ; 
	public function  __construct(){
	}
	public function __call ($method,$parameter){  //this if the user call a method that not exist or not accessible
		echo "the method ".$method." not found";
	}
	public function __get ($prop){  //this if the user call a property that not exist or not accessible
		echo "the property ".$prop." not found";
	}
	public function __set ($prop,$value){  //this if the user call a property that not exist or not accessible
		echo "the property ".$prop." not found or not accessible and the value ".$value ;
	}
	public function setSellerPhone($sellerPhone){
		$this->sellerPhone=$sellerPhone ;
	}
	public function setSellerRate($sellerRate){
		$this->sellerRate=$sellerRate ;
	}
	public function getSellerPhone(){
		return $this->sellerPhone ;
	}
	public function getSellerRate(){
		return $this->sellerRate ;
	}
	public function addProduct($serialNumber,$Name,$Rate,$Price,$Picture,$Details){
		$Query="Insert Into Product values ('".$serialNumber."',
											'".$Name."'        ,
											'".$Rate."'	       ,
											'".$Price."'       ,
											'".$Picture."'     ,
											'".$Details."'
										)";
		$obj=new Connect() ;
		if ($result = $obj->mysqli->query($Query)) {
		  	echo "inserted";
		}else{
			echo "not inserted";
		}
	}
	public function updateSellerRate($sellerId,$sellerRate){
		$Query="Update Seller set SellerRate='".$sellerRate."' where Id='".$sellerId."'";
		$obj=new Connect() ;
		if ($result = $obj->mysqli->query($Query)) {
		  	echo "updated ";
		}else{
			echo "not updated";
		}
	}
}
?>