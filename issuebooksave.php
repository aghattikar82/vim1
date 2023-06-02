<?php include("connection.php") ?>
<?php 


try
{

	$sid=$_POST["regno"];
	$bookisbn=$_POST["isbnnumber"];
	$issuedby="1";//$_SESSION["staffid"];
	
	$i=$con->query("insert into tblbookissue(regno,bookisbn,issuedate,returndate,issuedby) values('$sid',$bookisbn,date_format(now(),'%d-%m-%Y'),'-',$issuedby)");

	$con->close();


	if(intval($i)==1)
	{
		header("Location:issuebook.php?msg=Book Issued  Successfully");

	}
else
	{
		//header("Location:issuebook.php?msg=Registration Failed");

	}
	
	}

	catch(exception $exc)
	{
                       print("Exception".$exc);
	}
?>