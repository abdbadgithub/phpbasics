<?php

$data = array(
   "musicals"=> array(
        "Oklahoma","The Music Man","South Pacific"
    ),
   "dramas"=> array(
       "Lawrence of Arabia","To Kill a Mockingbird","Casablanca"
   ),
   "mysteries" => array(
       "The Maltese Falcon","Rear Window","North by Northwest"
   )
);
foreach ( $data as $key => $value )
{
    echo $key;
    echo"<br>";
  foreach ($value as $sub_key => $sub_val){
      echo "---->".$sub_key." = ".$sub_val."<br>";
  }
//print_r($value);
}