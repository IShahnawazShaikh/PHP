<?php
    $x=10;   //Global scope
    function test(){
                $y=10.6;    //local scope
              //Usin x inside the fuction generate error
              echo "<p> value of x  inside the function is:$x</p>";
              echo "<p> value of y  inside the function is:$y</p>";
}
test();
  echo "<p> value of x  outside the function is:$x</p>";
   echo "<p> value of y  outside the function is:$y</p>";          //generate error 
  
?>