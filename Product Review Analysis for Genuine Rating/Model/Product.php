<?php

    class Product
    {
        private $name;
        private $id;
        private $catID;
        private $averageRating;
        private $price;
        private $expireDate;
        private $serialNumber;
        private $otherInfo;
        public function __construct()
        {
            $this->name = "";
            $this->id = "";
            $this->catID = "";
            $this->averageRating = 0.0;
            $this->price = 0.0;
            $this->expireDate = "";
            $this->serialNumber = "";
            $this->otherInfo = "";
        }
        //getters
        public function getName()
        {
            return $this->name;
        }
        public function getID()
        {
            return $this->id;
        }
        public function getCategoryID()
        {
            return $this->catID;
        }
        public function getAverageRating()
        {
            return $this->averageRating;
        }
        public function getPrice()
        {
            return $this->price;
        }
        public function getExpireDate()
        {
            return $this->expireDate;
        }
        public function getSerialNumber()
        {
            return $this->serialNumber;
        }
        public function getOtherInfo()
        {
            return $this->otherInfo;
        }
        
        //setters
        public function setName($var)
        {
            $this->name = $var;
        }
        public function setID($var)
        {
            $this->id = $var;
        }
        public function setCategoryID($var)
        {
            $this->catID = $var;
        }
        public function setAverageRating($var)
        {
            $this->averageRating = $var;
        }
        public function setPrice($var)
        {
            $this->price = $var;
        }
        public function setExpireDate($var)
        {
            $this->expireDate = $var;
        }
        public function setSerialNumber($var)
        {
            $this->serialNumber = $var;
        }
        public function setOtherInfo($var)
        {
            $this->otherInfo = $var;
        }
    }