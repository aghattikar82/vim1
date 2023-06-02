	<?php session_start();  ?>
<?php 

	include("connection.php");
	$eid=$_POST["hdsid"];
	$attendancestatus=$_POST["ddlattendance"];
	$n=count($_POST["hdsid"]);
	for($i=0;$i<$n;$i++)
	{
		$staffid=$eid[$i];
		$attendancedate="date_format(now(),'%d-%m-%Y')";
		$attendancestte=$attendancestatus[$i];
		$entrydate="now()";
		$enteredby=$_SESSION["staffid"];
		try {
			$qry="insert into tblstaffattendence(staffid,attendencedate,status,entrydate,enteredby) values($staffid,date_format(now(),'%d-%m-%Y'),'$attendancestte','$entrydate','$enteredby');";
			print($qry);
			$con->query($qry);

		} catch (Exception $e) {
				//print($e);			
	$_SESSION["msg"]="Server Error";
	header("location:staffattendence.php");	

		}
	}
	$_SESSION["msg"]="Attendance Updated";
	header("location:staffattendence.php");	
?>