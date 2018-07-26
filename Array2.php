<?php
  
    $Array=array();
	$Array["shahnawaz"]=10;
	$Array[]=100;
	$Array[]=1000;
	$Array[5]=10000;
	$Array['a']=100000;
	$Array[]=1000000;
	
	$Array1=array();
	$Array1["shahnawaz"]=2;
	$Array1[]=3;
	$Array1[]=4;
	$Array1[5]=5;
	$Array1['a']=6;
	$Array1[]=7;
	
	 echo "<pre>";
	   print_r($Array);
	 echo "</pre>";
	 echo "<pre>";
	   print_r($Array1);
	 echo "</pre>";
?>