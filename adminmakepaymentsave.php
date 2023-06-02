<?php session_start();  ?>

<?php 
	include("getconnection.php");
	try {
		$empid=$_POST["txtempid"];
		$amountpaid=0;
		$paidon="date_format(now(),'%d-%m-%Y')";
		$entrydate="now()";
		$i=0;
		$enteredby=$_SESSION['mobilenumber'];

		foreach ($_POST['txtempid'] as $newempid)
		{
			if(isset($_POST["txtamountpaid".$newempid]))
			{
				$amount=$_POST["txtamountpaid".$newempid];
				if(intval($amount)>0)
$con->query("CALL SP_INS_PAYMENTINFO($newempid,$amount,$paidon,$entrydate,$enteredby);");

			}
		}	
			$_SESSION["msg"]="Payment Done Successfully";

			header("location:adminpayment.php");
	} catch (Exception $e) {
				$_SESSION['msg']="Server Error";
		header("Location:adminpayment.php");

	}
?>