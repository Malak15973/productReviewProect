<?php
include_once "AdminQuery.php";
include_once "../Model/Seller.php";

$seller = new Seller();
$seller->setName('kiro');
$seller->setSellerPhone('01202312321');
echo AddSeller($seller);



