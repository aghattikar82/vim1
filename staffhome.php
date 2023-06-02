<?php include("connection.php") ?>

<!DOCTYPE html>
<html>
<head>
	<?php include("design/head.php") ?>
	<title>Home</title>
	
</head>
<body>
	<?php include("design/staffmid.php") ?>
	
<center> Welcome:<?php 
session_start();
echo ucfirst($_SESSION['name']);


 ?></center>

<?php include("design/last.php") ?>
</body>
</html>