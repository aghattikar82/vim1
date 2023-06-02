<?php  
try

{
	$course=$_POST["course"];
	$year_or_sem=$_POST["year_or_sem"];
	$semfees=$_POST["semfees"];
	$yearfees=$_POST["yearfees"];
	
$con=mysqli_connect("localhost","root","admin","vim");
$stmt=$con->prepare("insert into tblpayfees values(null,?,?,?,?)");
$stmt->bind_param("ssss",$course,$year_or_sem,$semfees,$yearfees);

	$i=$stmt->execute();
	$con->close();



	if(intval($i)==1)
	{
		header("Location:payfees.php?msg=Registered Successfully");

	}
	else
	{
		header("Location:reform.php?msg=Registration Failed");

	}
	
	}

	catch(exception $exc)
	{
                       print("Exception".$exc);
	}
?>

