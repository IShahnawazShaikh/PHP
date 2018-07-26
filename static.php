<?php
   function test(){
     static $x=0;
     echo $x;
     print "<br>";
     $x++;
}
  test();
  test();
   test();
?>