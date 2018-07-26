<html>
  <head>
      <title>Uploading File</title>
   </head>
   <body>
      <h2>Upload Your File</h2>
	  <form method="post" enctype="multipart/form-data">
      <table border="1" color="green">
	       <th colspan="2">Fill Your Detail</th>
		   <tr>
		      <td>Name:</td>
               <td><input type="text" name="name"></td>			  
			</tr>
			<tr>
			 <td>Upload your Pic</td>
			 <td><input type="file" name="FileDetails" value="upload"></td>
			 </tr>
			 <tr><td colspan="2"><input type="submit" value="submit"></td></tr>
	  </table>
	  </form>
	  <pre>
  <?php
   print_r($_FILES['FileDetails']);
  ?>
</pre>
   </body>
</html>
