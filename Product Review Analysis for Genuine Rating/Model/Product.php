<?php
    include_once "connect.php" ;
    class Product
    {
        private $Name;
        private $CategoryId;
        private $Rate;
        private $Price;
        private $Picture;
        private $SerialNumber;
        private $Details;
        public function __construct()
        {
            $this->Name = "";
            $this->CategoryId = "";
            $this->Rate = 0.0;
            $this->Price = 0.0;
            $this->Picture = "";
            $this->SerialNumber = "";
            $this->Details = "";
        }
        //getters
        public function getName()
        {
            return $this->Name;
        }
        public function getCategoryId()
        {
            return $this->CategoryId;
        }
        public function getRate()
        {
            return $this->Rate;
        }
        public function getPrice()
        {
            return $this->Price;
        }
        public function getPicture()
        {
            return $this->Picture;
        }
        public function getSerialNumber()
        {
            return $this->SerialNumber;
        }
        public function getDetails()
        {
            return $this->Details;
        }
        
        //setters
        public function setName($var)
        {
            $this->Name = $var;
        }
        public function setCategoryId($var)
        {
            $this->CategoryId = $var;
        }
        public function setRate($var)
        {
            $this->Rate = $var;
        }
        public function setPrice($var)
        {
            $this->Price = $var;
        }
        public function setPicture($var)
        {
            $this->Picture = $var;
        }
        public function setSerialNumber($var)
        {
            $this->SerialNumber = $var;
        }
        public function setDetails($var)
        {
            $this->Details = $var;
        }
        
        //
        public function updateRate($userRate)
        {
            $this->Rate = ($this->Rate + $userRate) / 2;
            $connecntion = new Connect();
            $query = "UPDATE product 
            SET Rate = \'" + $this->Rate+"\' WHERE SerialNumber = " + $this->SerialNumber + ";";
            $connecntion->mysqli->query($query);
        }
    }
