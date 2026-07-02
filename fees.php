<?php

$serviceFees = [
    " Consultation" => 500,
  
    "family law" => 5000,
    "Property Dispute" => 7500,
    "Criminal law" => 10000,
    "property law" => 3000,
     "corporate law"=> 10,000,
     "Intellectual Property"=>6200,
     "Consumer & Civil Matter"=>4500 ,
    "Documentation"=>2200 ,
     "Employment & Tax"=>3300 ,


];
$sql="SELECT  `fees` FROM `services` WHERE service_name=$service_name";
$result=($sql);
?>

