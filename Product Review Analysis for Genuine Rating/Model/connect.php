<?php
	class Connect{
		public  $mysqli ;
		public function __construct(){
			$this->mysqli = new mysqli("localhost","root","","product_review_analysis");

		}
}