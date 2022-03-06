<!DOCTYPE html>
<html>
<body>
<form method="post" action="index.php">
  Enter the first number:  
  <input type="text" name="num1"><br>
  Enter the second number:
  <input type="text" name="num2"><br>
  Enter the third number:  
  <input type="text" name="num3">
  <br>
  <input type="submit" name="submit">
<br>
</form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
      $num1=$_POST["num1"];
      $num2=$_POST["num2"];
      $num3=$_POST["num3"];
      if($num1>$num2 && $num1>$num3){
        echo $num1."is the largest number";
      }
      else{
        if($num2>$num1 && $num2>$num3){
          echo $num2."is the largest number";
        }
        else
          echo $num3."is the largest number";
      }
  }
?>