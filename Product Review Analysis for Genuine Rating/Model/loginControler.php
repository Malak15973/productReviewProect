<?php
	include "LoginModel.php" ;
	if(isset($_POST['submit'])){
		$username=$_POST['username'] ;
		$password=$_POST['password'] ;
		$obj=new Login($username,$password);
		if($obj->result==1){
			header("Location:MainPage.php") ;
		}else{
			echo "Invalid username or password";
		}
	}
?>