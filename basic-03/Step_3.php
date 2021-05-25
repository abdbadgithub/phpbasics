<?php
function check($str,$word){
$counter=0;
print_r (explode(" ",$str));
$array = explode(" ",$str);

for($i=0;$i<count($array);$i++){
if($array[$i] == $word){
$counter= $counter + 1;

}
}
return $counter;
}
$str = "Hello world. It's a beautiful day. Hello";
echo check($str,"Hello");

?>