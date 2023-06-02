<?php  
try

{
	
	$course=$_POST["course"];
	$aplno=$_POST["aplno"];
	$sname=$_POST["sname"];
	$fname=$_POST["fname"];
	$mname=$_POST["mname"];
	$dob=$_POST["dob"];
	$bloodgroup=$_POST["bloodgroup"];
	$religion=$_POST["religion"];
	$category=$_POST["category"];
	$address=$_POST["address"];
	$pincode=$_POST["pincode"];
	$p_mobile_no=$_POST["p_mobile_no"];
	$paddress=$_POST["paddress"];
	$s_mobile_no=$_POST["s_mobile_no"];
	$semail=$_POST["semail"];
	$language=$_POST["language"];
	$sslc_reg_no=$_POST["sslc_reg_no"];
	$income_caste_no=$_POST["income_caste_no"];
	$three_seven_one_j=$_POST["three_seven_one_j"];
	$adhar_no=$_POST["adhar_no"];
	$acno=$_POST["acno"];
	$ifsc_code=$_POST["ifsc_code"];
	$branch=$_POST["branch"];
	 $myfile=basename($_FILES["s_image"]["name"]);
	  $myfile2=basename($_FILES["pu_image"]["name"]);
    $myfile3=basename($_FILES["tc_image"]["name"]);
    $myfile4=basename($_FILES["stamp_size_image"]["name"]);
 	$target_dir1 = "student/";
	$target_file1 = $target_dir1 . basename($_FILES["s_image"]["name"]);
	
    move_uploaded_file($_FILES["s_image"]["tmp_name"], $target_file1);
    
    $target_dir2 = "pumarkscard/";
	$target_file2 = $target_dir2 . basename($_FILES["pu_image"]["name"]);
	
    move_uploaded_file($_FILES["pu_image"]["tmp_name"], $target_file2);

    $target_dir3 = "transfercertificate/";
	$target_file3 = $target_dir3 . basename($_FILES["tc_image"]["name"]);
	
    move_uploaded_file($_FILES["tc_image"]["tmp_name"], $target_file3);
    $target_dir4 = "stampsizephoto/";
	$target_file4 = $target_dir4 . basename($_FILES["stamp_size_image"]["name"]);
	
    move_uploaded_file($_FILES["stamp_size_image"]["tmp_name"], $target_file4);


  $con=mysqli_connect("localhost","root","ADMIN","vim");
 $stmt=$con->prepare("insert into admission values(null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
  $stmt->bind_param("sssssssssssssssssssssssssss" ,$myfile,$course,$aplno,$sname,$fname,$mname, $dob,$bloodgroup,$religion,$category,$address,$pincode,$p_mobile_no, $paddress,$s_mobile_no,$semail, $language,$sslc_reg_no,$income_caste_no,$three_seven_one_j,$adhar_no,$acno,$ifsc_code,$branch,$myfile2,$myfile3, $myfile4);
	
	$i=$stmt->execute();
	$con->close();



	if(intval($i)==1)
	{
		header("Location:admform.php?msg=Registered Successfully");

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

