<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

   

    <form class="form" action="" method="post">
        <h1 class="login-title">Calculator</h1>
        <input type="number" class="login-input" name="salary" placeholder="Salary in USD" autofocus="true" required/>
        <input type="radio" id="month" name="date" value="month" required>
        <label for="month">monthly</label><br>
        <input type="radio" id="year" name="date" value="year" >
        <label for="year">Yearly</label><br>
        <input type="submit" value="Calculate" name="submit" class="login-button"/>
        <?php
$message = "";
if(isset($_POST['submit'])){
    $result=0;
    $tax=0;
    $taxamout=0;
    $social=0;
    $radioVal = $_POST["date"];
  $input = $_POST['salary'];
  if($input<=10000){
      echo "no taxes";
      $result = $input;
  }
  elseif($input<=25000){
$tax=11;
$taxamout = $input * ($tax/100);
$social= $input * (4/100);
$result = $input - ($taxamout)-($social);
  }
  elseif($input<=50000){
$tax=30;
$taxamout = $input * ($tax/100);
$social= $input * (4/100);
$result = $input - ($taxamout)-($social);
  }
  else {
$tax=45;
$taxamout = $input * ($tax/100);
$social= $input * (4/100);
$result = $input - ($taxamout)-($social);
  }
  if($radioVal =="month"){
       echo "yearly data: <br>
      Salary: ".($input/12)."<br>".
  "tax rate: ".$tax."% <br>
   Tax amount: ".($taxamout/12)."<br>
   Social security fee: ".($social/12)."<br>
    Salary after tax : ".($result/12);
  }
  else{
      echo "yearly data: <br>
      Salary: ".$input."<br>".
  "tax rate: ".$tax."% <br>
   Tax amount: ".$taxamout."<br>
   Social security fee: ".$social."<br>
    Salary after tax : ".$result; 
  }
  
}    
?>
        
  </form>


</body>
</html>
