<?php
include_once "connect.php" ;
class Human{
	private $Name     ;
	private $Id       ;
	private $Password ;
	private $Email    ;

	public function  __construct(){
		
	}
	public function Login($username,$password){
		$Query="SELECT Username,Password,UserTypeId from users where Username='".$username."' and Password='".$password."'" ;
			$obj=new Connect() ;
			if ($result = $obj->mysqli->query($Query)) {
		  		if($result -> num_rows==1){
		   			while($row = $result->fetch_assoc()) {
        				if($row['UserTypeId']==1){
        					return "Admin Login Sucess "; 
        				}else{
        					return "User Login Sucess ";
        				}
    				}
		   		}else{
		   			return "Sorry You are not a user or a admin" ;
		   		}
			}
	}
	public function  editUserData($userTypeId,$userName,$Id,$Password,$Email){
		$Query="UPDATE users SET UserName='".$userName."',Password='".$Password."',Email='".$Email."',UserTypeId='".$userTypeId."' WHERE Id ='".$Id."'";
		$obj=new Connect() ;
		if ($result = $obj->mysqli->query($Query)) {
		  	echo "updated ";
		}else{
			echo "not updated";
		}
	}
	public function __call ($method,$parameter){  //this if the user call a method that not exist or not accessible
		echo "the method ".$method." not found";
	}
	public function __get ($prop){                //this if the user call a property that not exist or not accessible
		echo "the property ".$prop." not found";
	}
	public function __set ($prop,$value){         //this if the user call a property that not exist or not accessible
		echo "the property ".$prop." not found or not accessible and the value ".$value ;
	}
	//Start Setter
	public function setName($Name){
		$this->Name=$Name ;
	}
	public function setId($Id){
		$this->Id=$Id ;
	}
	public function setPassword($Password){
		$this->Password=$Password ;
	}
	public function setEmail($Email){
		$this->Email=$Email ;
	}
	//End Setter

	//Start Getter
	public function getName(){
		return $this->Name ;
	}
	public function getId(){
		return $this->Id ;
	}
	public function getPassword(){
		return $this->Password ;
	}
	public function getEmail(){
		return $this->Email ;
	}
	//End Getter
}
?>