<html>
  <head></head>
  <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
	<label>Number:</label>
	<input type="number" name="number">
	<input type="submit">
	</form>
 <?php	
	if($_SERVER["REQUEST_METHOD"]=="Post"){
	$my=$_REQUEST['number'];
	echo $my;
	}
?>
  </body>
</html>