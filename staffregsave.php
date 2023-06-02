<?php  
try

{
	$name=$_POST["name"];
	$designation=$_POST["designation"];
	$education=$_POST["education"];
	$phone_no=$_POST["phone_no"];
	$password=$_POST["password"];
	$email=$_POST["email"];



$con=mysqli_connect("localhost","root","admin","vim");
$stmt=$con->prepare("insert into tblstaffreg values(null,?,?,?,?,aes_encrypt(?,'Anup'),?)");
  $stmt->bind_param("ssssss" ,$name,$designation,$education,$phone_no,$password,$email);
	
	$i=$stmt->execute();
	$con->close();



	if(intval($i)==1)
	{
		header("Location:staffregistration.php?msg=Registered Successfully");

	}
	else
	{
		//header("Location:reform.php?msg=Registration Failed");

	}
	
	}

	catch(exception $exc)
	{
                       print("Exception".$exc);
	}
?>

