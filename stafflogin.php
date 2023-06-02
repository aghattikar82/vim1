
<!DOCTYPE html>
<html>
<head>
	<title>Staff Login</title>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1 align="center">Staff Login Page</h1>
	
	<form name="frmlogin" method="post" action="checklogin.php"><br>
		<table align="center" width="">
			<tr>
				<td>
					<font color="red" >*</font>Enter Staff Id:<br>
                      <input type="number" class="form-control" name="staffid" placeholder="Enter Staff Id" required autofocus="on" autocomplete="off" min="1"><br><br>
                      <font color="red" >*</font>Enter Password:<br>
                      <input type="password" class="form-control" name="password" required placeholder="Enter Password" ><br><br>
                      <center>
                      <input type="submit" name="btnlogin" class="btn btn-success" value="Login">  					</center>
				</td>
			</tr>
		</table>
		
	</form>

</body>
</html>