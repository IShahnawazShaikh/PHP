<?php
      $x=100;
       $y=100;
       function addition(){
           $GLOBALS['x']= $GLOBALS['x']+ $GLOBALS['y'];
      }
   addition();
    echo "Sum is:".$x;
?>