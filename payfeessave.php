<?php  
try

{
include("connection.php");
	
	$name=$_POST["name"];
	$course=$_POST["course"];
	$year=$_POST["year"];
	$amountpaid=$_POST["amountpaid"];
	$regno=$_POST["regno"];
	$paymentmode=$_POST["paymentmode"];
	
  $i=$con->query("insert into tblpayfees(name,course,year,amountpaid,createdate,paidto,softdelete,softdeletedate,regno,paymentmode) values('$name','$course','$year',$amountpaid,date_format(now(),'%d-%m-%Y'),'accountant','0','-','$regno','$paymentmode')");

	$con->close();



	if(intval($i)==1)
	{
		header("Location:payfeesdisplay.php?msg=Fees Paid Successfully");

	}
	else
	{
		//header("Location:payfeesdisplay.php?msg=Payment Failed");

	}
	
	}

	catch(exception $exc)
	{
                       print("Exception".$exc);
	}
?>

