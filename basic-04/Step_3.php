<?php
// Define a class
 class calculator
 {
    // Declaring three private varaibles
    private $firstnumber;
    private $secondnumber;
    

    // Declarte construct method which accepts three parameters
    function __construct($firstnumber,$secondnumber)
    {
        $this->firstnumber = $firstnumber;
        $this->secondnumber = $secondnumber;
     
       
    }
function getfirstnumber(){
    return $this->firstnumber;
}
function getsecondnumber(){
    return $this->secondnumber;
}
function setfirstnumber($firstnumber){
     $this->firstnumber=$firstnumber;
}
function setsecondnumber($secondnumber){
   $this->secondnumber=$secondnumber;
}
function add(){
 return $this->firstnumber+$this->secondnumber;
}
function mutiple(){
 return $this->firstnumber*$this->secondnumber;
}
    // Declare a method for customize print
    function customize_print()
    {
        echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_value."</p>";
    }

 }

// Create a new object and passes three parameters
 $c = new calculator(12, 6);

// Call the method to display the string
echo "sum equals to = ".$c->add();
echo"<br>";
echo "multiple equals to = ".$c->mutiple();
 ?>
