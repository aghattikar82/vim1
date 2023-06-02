<?php  
try

{

	$booktype=$_POST["booktype"];
	$bookname=$_POST["bookname"];
	$title=$_POST["title"];
	$isbn_no=$_POST["isbn_no"];
	$publisher=$_POST["publisher"];
	$author=$_POST["author"];
	$published_yr=$_POST["published_yr"];
	$edition=$_POST["edition"];
	$publication_cost=$_POST["publication_cost"];
	$publication_type=$_POST["publication_type"];

$con=mysqli_connect("localhost","root","admin","vim");
$stmt=$con->prepare("insert into tbladdbook values(null,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssssss",$booktype,$bookname,$title,$isbn_no,$publisher,$author,$published_yr,$edition,$publication_cost,$publication_type);

	$i=$stmt->execute();
	$con->close();



	if(intval($i)==1)
	{
		header("Location:addbook.php?msg=Registered Successfully");

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