<?php
   // $varArray=array();
   $varArray=array("shahnawaz",101,90.5);
    echo "Name=".$varArray[0]."<br> Roll Number=".$varArray[1]."<br> Marks=".$varArray[2];
     echo "<br>";
	 var_dump($varArray);
	 
	 //Changing index of Array
	 $varArray=array(10=>"shahnawaz",'abc'=>101,0=>90.5);
	 echo "<br>";
	  echo "<br>";
	 echo "Name=".$varArray[10]."<br> Roll Number=".$varArray['abc']."<br> Marks=".$varArray[0];
	 echo "<br>";
	 var_dump($varArray);
	 
   ?>