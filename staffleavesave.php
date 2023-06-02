<?php  
try

{
	
	$subject=$_POST["subject"];
	$matter=$_POST["matter"];
	$leavedate=$_POST["leavedate"];
	$noofleavedays=$_POST["noofleavedays"];

$con=mysqli_connect("localhost","root","admin","vim");
$stmt=$con->prepare("insert into tblstaffleave values(null,?,?,?,?,date_format(now(),'%d-%m-%Y %h:%i %p'),date_format(now(),'%d-%m-%Y %h:%i %p'),'0',date_format(now(),'%d-%m-%Y %h:%i %p'))");
 $stmt->bind_param("ssss",$subject,$matter,$leavedate,$noofleavedays);
	
	$i=$stmt->execute();
	$con->close();



	if(intval($i)==1)
	{
		header("Location:staffleaveregister.php?msg=Leave Applied Successfully");

	}
	else
	{
		//header("Location:staffleaveregister.php?msg=Leave Failed");

	}
	
	}

	catch(exception $exc)
	{
                       print("Exception".$exc);
	}
?>

