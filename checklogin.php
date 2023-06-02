<?php session_start() ?>
<?php include("connection.php") ?>
<?php include("design/msg.php") ?>

<?php 
try
{


	$staffid=$_POST["staffid"];
	$_SESSION["staffid"]=$staffid;
	$password=$_POST["password"];
	$data=$con->query("select password,staffid 
		,name,designation  from userstaffregister where staffid='$staffid' and password='$password'");
	     if($row=mysqli_fetch_array($data))
     {
     	if(strcmp($row["password"], $password)==0)
     	{
     		$_SESSION["name"]=$row["name"];
     		if($row["designation"]=="5")
     		header("Location:libraryhome.php");
     		else if($row["designation"]=="4")
     		header("Location:staffhome.php");
     		else if($row["designation"]=="6")
     		header("Location:accountshome.php");
     		else if($row["designation"]=="2")
     		header("Location:adminhome.php");
     		else if($row["designation"]=="1")
     		header("Location:managementhome.php");
     		else if($row["designation"]=="3")
     		header("Location:hodhome.php");
     		else if($row["designation"]=="7")
     		header("Location:dtohome.php");
     	
     	
     		
     	}
     	else
     	{
     		header("Location:login.php?msg=Invalid Staff ID or Password");

     	}
     }
 }
  catch(Exception $exe){}
 	
     		?>