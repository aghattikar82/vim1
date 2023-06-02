<?php include("connection.php") ?>
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

	$i=$con->query("insert into userstaffregister(name,designation,education,workexperience,mobilenumber,password,emailid) values('$name',$designation,$education,$workexperience,$mobilenumber,$password,$emailid)");

	$con->close();


	if(intval($i)==1)
	{
		header("Location:staffregform.php?msg=Registered Successfully");

	}
else
	{
		//header("Location:staffregform.php?msg=Registration Failed");

	}
	
	}

	catch(exception $exc)
	{
                       print("Exception".$exc);
	}
?>
 