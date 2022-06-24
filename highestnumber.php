<?php
if(isset($_POST["submit"])){
      $num1=$_POST["num1"];
      $num2=$_POST["num2"];
      $num3=$_POST["num3"];
      if($num1>$num2 && $num1>$num3){
        echo "The Highest number is ",$num1;
      }
      else{
        if($num2>$num1 && $num2>$num3){
          echo"The Highest number is ", $num2;
        }
        else
          echo "The Highest Number is ",$num3;
      }
  }

?>