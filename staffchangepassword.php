<!DOCTYPE html>
<html>
<head>
	<title>Staff Change Password</title>
	
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php include("msg.php"); ?>
<form name="frmcp" method="post" accept="staffupdatepassword.php">
	
<table align="center" >
	<tr>
		<td>
			<font color="red">*</font>Current Password<br>
			<input type="Password" name="currentpassword" class="form-control" required autofocus="on" placeholder="Enter Current  Password"><br><br>
			 
			 <font color="red">*</font>New Password<br>
			<input type="Password" name="newpassword" class="form-control" required autofocus="on" placeholder="Enter New Password"><br><br><font color="red">*</font>Retype Password<br>
			
			<input type="Password" name="retypespassword " class="form-control" required autofocus="on" placeholder="Enter Retype Password"><br><br>
			
			<center><input type="submit" class="btn btn-danger" name="btnsubmit" value="Change  Passwords"></center>

		</td>
	</tr>
	</table>
</form>

</body>
</html>