<?php

$items = ["Eggs", "Milk", "Cheese", "Water Pack", "Tissues", "Watermelon"];
echo "Hello Sir, do you have ". $items[0].", ". $items[1].", and ". $items[2]."? 
Also if you sell fruits can I find a ". $items[5]."?";

echo "<br>";
$mulitems = array(
      
    // Ankit will act as key
    "eggs" => array(
          

        "balade","mazere3" 
    ),
        "milk" => array(
          

        "Fresh",'Taanayel'
    ),
      
    // Anoop will act as key
    "water-pack" => array(
          
        // Subject and marks are
        // the key value pair
       "Tanoureen", "Reem"
    ),
);

echo "<br>";
echo "Hey Sir, Please I need 1 pack of ".$mulitems['eggs'][0]." eggs and 3 ".$mulitems['water-pack'][1]."Water Pack."
?>