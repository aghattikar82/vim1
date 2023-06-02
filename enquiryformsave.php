<?php  
try

{
	$course=$_POST["course"];
	$fullname=$_POST["fullname"];
	$dob=$_POST["dob"];
	$category=$_POST["category"];
	$native=$_POST["native"];
	$Address=$_POST["address"];
	$snumber=$_POST["snumber"];
	$pnumber=$_POST["pnumber"];
	$stream=$_POST["stream"];
	$moinstruction=$_POST["moinstruction"];
	$puc=$_POST["puc"];
	$marksscored=$_POST["marksscored"];
	$sslc=$_POST["sslc"];
	$presiding=$_POST["presiding"];
	$aboutcollege=$_POST["aboutcollege"];
	$fname=$_POST["fname"];
	$fatherage=$_POST["fatherage"];
	$fqualification=$_POST["fqualification"];
	$foccupation=$_POST["foccupation"];
	$mname=$_POST["mname"];
	$motherage=$_POST["motherage"];
	$mqualification=$_POST["mqualification"];
	$moccupation=$_POST["moccupation"];
	$afincome=$_POST["afincome"];
	$edate=$_POST["edate"];
	$Register=$_POST["Register"];



	
$con=mysqli_connect("localhost","root","admin","vim");
$stmt=$con->prepare("insert into tblenquiryform values(null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssssssssssssssssssssss",$course,$fullname,$dob,$category,$native,$Address,$snumber,$pnumber,$stream,$moinstruction,$puc,$marksscored,$sslc,$presiding,$aboutcollege,$fname,$fatherage,$fqualification,$foccupation,$mname,$motherage,$mqualification,$moccupation,$afincome,$edate,$Register);

	$i=$stmt->execute();
	

	$con->close();



	if(intval($i)==1)
	{
		header("Location:enquiryform.php?msg=Registered Successfully");

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

