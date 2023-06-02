	<?php session_start();  ?>
<?php 

	include("connection.php");
	$eid=$_POST["hdsid"];
	$attendancestatus=$_POST["ddlattendance"];
	$n=count($_POST["hdsid"]);
	for($i=0;$i<$n;$i++)
	{
		$sid=$eid[$i];
		$attendancedate="date_format(now(),'%d-%m-%Y')";
		$attendancestte=$attendancestatus[$i];
		$entrydate="now()";
		$enteredby=$_SESSION["staffid"];
		try {
			$qry="insert into tblstudentattendence(sid,attendencedate,status,entrydate,enteredby) values($sid,date_format(now(),'%d-%m-%Y'),'$attendancestte','$entrydate','$enteredby');";
			print($qry);
			$con->query($qry);

		} catch (Exception $e) {
				//print($e);			
	$_SESSION["msg"]="Server Error";
	header("location:studentattendence.php");	

		}
	}
	$_SESSION["msg"]="Attendance Updated";
	header("location:studentattendence.php");	
 