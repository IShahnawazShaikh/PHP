<?php
    $x=10;   //Global scope
    function test(){
               //global $x;  
                $x=20;
               global $x ;  
              echo "<p> value of x  inside the function is:$x</p>";
}
test();
    echo "<p> value of x  outside the function is:$x</p>";
  
?>