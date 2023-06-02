<?php  
try

{
	
	$course=$_POST["course"];
	$year=$_POST["year"];
	$feeshead=$_POST["feeshead"];
	$payingamount=$_POST["payingamount"];

$con=mysqli_connect("localhost","root","admin","vim");
$stmt=$con->prepare("insert into tblfeesmaster values(null,?,?,?,?)");
 $stmt->bind_param("ssss",$course,$year,$feeshead,$payingamount);
	
	$i=$stmt->execute();
	$con->close();



	if(intval($i)==1)
	{
		header("Location:feesmaster.php?msg=Fees Paid Successfully");

	}
	else
	{
		//header("Location:feesmaster.php?msg=Registration Failed");

	}
	
	}

	catch(exception $exc)
	{
                       print("Exception".$exc);
	}
?>

