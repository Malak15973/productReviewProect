<?php
	include 'connect.php';
	class Login{
		private $username ;
		private $password ;
		public $result ;

		public function __construct($username,$password){
			$this->username =$username ;
			$this->password =$password ;
			$this->result=$this->getDataFromDatabase($this->username,$this->password) ;
		}
		public function getDataFromDatabase($username,$password){
			$Query="SELECT Username,Password from Doctor where Username='".$username."' and Password='".$password."'" ;
			$obj=new Connect() ;
			if ($result = $obj->mysqli->query($Query)) {
		  		if($result -> num_rows==1){
		   			return 1 ;
		   		}else{
		   			return 0 ;
		   		}
			}
		} 
	}
?>