<?php

$transactions = array(
    array(
        "id" => 1,
        "name"=> "Gaby",
        "email"=> "gaby@codi.tech"
    ),
    array(
       "id" => 3,
       "name"=> "Omar",
       "email"=> "omar@codi.tech"
    )
);
foreach ( $transactions as $key => $value )
{
  foreach ($value as $sub_key => $sub_val){
      echo $sub_key." ".$sub_val."<br>";
  }
//print_r($value);
}