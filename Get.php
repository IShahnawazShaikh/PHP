<html>
   <head>
      <title>Form</title>
   </head>
   <body>
      <form action="GETDATA2.php" method="get">
            <table border="1" color="blank">
			    <tr>
				    <td>Name</td>
					<td><input type="text" name="name" placeholder="Enter your name"></td>
				</tr>
				<tr>
				    <td>Roll number</td>
					<td><input type="text" name="Roll" placeholder="Enter your Roll"></td>
				</tr>
				
				<tr>
				    <td>Gender: </td>
					<td>Male<input type="radio" name="gender" value="Male ">
					Female<input type="radio" name="gender" value="Female"></td>
				</tr>
				<tr>
				   <td colspan="2" align="center"><input type="submit" value="submit"></td>
				</tr>
			 </table>
      </form>	   
   </body>
</html>