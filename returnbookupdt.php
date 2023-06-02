<?php include("connection.php") ?>
<?php  
try
{

	$issueid=$_POST["issueid"];
	
	$returnstatus=$_POST["returnstatus"];
	//$issuedby="1";//$_SESSION["staffid"];
	$i=$con->query("update  tblbookissue set returndate=date_format(now(),'%d-%m-%Y') , returnstatus='$returnstatus'  where issueid=$issueid ");
	$con->close();


	if(intval($i)==1)
	{
		header("Location:returnbook.php?msg=Book Returned   Successfully");

	}
else
	{
		//header("Location:returnbook.php?msg=Registration Failed");

	}
	
	}

	catch(exception $exc)
	{
                       print("Exception".$exc);
	}
?>