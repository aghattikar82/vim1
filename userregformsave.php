<?php  
try
{
	$name=$_POST["name"];
	$designation=$_POST["designation"];
	$education=$_POST["education"];
	$workexperience=$_POST["workexperience"];
	$mobilenumber=$_POST["mobilenumber"];
	$password=$_POST["password"];
	$emailid=$_POST["emailid"];
	$con=mysqli_connect("localhost","root","admin","vim");
	$stmt=$con->prepare("insert into  userstaffregister values(null,?,?,?,?,?,?,?)");
	$stmt->bind_param("sssssss",$name,$designation,$education,$workexperience,$mobilenumber,$password,$emailid);
	$i=$stmt->execute();
	$con->close();



	if(intval($i)==1)
	{
		header("Location:userregform.php?msg=Registered Successfully");

	}
	else
	{
		header("Location:userregform.php?msg=Registration Failed");

	}
	
	}

	catch(exception $exc)
	{
                       print("Exception".$exc);
	}
?>

