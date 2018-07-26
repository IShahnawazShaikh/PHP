<?php

   $x=5;
   while($x>0){
	   echo "while=$x<br>";          //while loop
	    $x--;
   }
   echo "<br>";
     $x=5;  
  do{
	   echo "Do While=$x<br>";             //do while loop
	    $x--;
   }
   while($x>0);
    echo "<br>";                          
     for($x=5;$x>0;$x--){                          //for loop
		 echo "For Loop=$x <br>";
	 }
	 
	   echo "<br> Foreach loop with 1D Array<br>";
	 $Array=array('shahnawaz'=>1,"shaikh"=>2,3,4,5,"kaash"=>6,7,9);
	 foreach($Array as $key=>$value){             //for each
		    echo "$key=>$value<br>";
		 }
		 echo "<br> Foreach loop with 2D Array<br>"; 
		 $Array2[1]=array(4,5,6);
		 $Array2[2]=array(7,8,9);
		 
		 foreach($Array2 as $key1=>$value){
			     
			   foreach($value as $key2=>$item){                    //for each 2D
			      echo "[$key1][$key2]=$item<br>";	   
			   }
		 }
?>