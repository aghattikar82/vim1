<?php session_start() ?>
<?php include("connection.php"); ?>
<?php 
try
{
	$currentpassword=$_POST["currentpassword"];
	$newpassword=$_POST["newpassword"];
	$retypespassword=$_POST["retypespassword"];
	if(strcmp(newpassword,retypespassword)==0)
	{
		$staffid=$_SESSION["staffid"];
		$stmt=$con->prepare("update set password=? where password=? and staffid=?");
		$stmt->bind_param("ssi",$newpassword,$currentpassword,$staffid);
		$i=$stmt->execute();
		if($i=1)
        {
          header("location:staffchangepassword.php?msg=password changed");
        }
        else
        {
        	header("location:staffchangepassword.php?msg=Invalid Cureent password");
        }
        //else
        {
        		header("location:staffchangepassword.php?msg=password Must Match");
        }

	}
}
catch(Exception $exe){}
?>