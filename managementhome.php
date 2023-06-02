	<?php include("connection.php") ?>
	<!DOCTYPE html>
	<html>
	<head>
		 <?php include("design/head.php") ?>
	 
		<title>Home</title>
		
	</head>
	<body>
		 <?php include("design/mngtmid.php") ?>
	 
	 	
	<center> Welcome: &nbsp<b> <?php
	  session_start();
	  echo  ucfirst($_SESSION['name']);
	 ?></b>
		</center>

	 <?php include("design/last.php") ?>
	 
	</body>
	</html>