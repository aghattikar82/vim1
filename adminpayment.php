<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment</title>
	<?php include("design/head.php") ?>
</head>
<body>
	<?php include("design/mid.php") ?>
<h2>Staff Payment Form</h2>
<form name="frm" method="post" action="adminmakepaymentsave.php">
	<table class="table table-bordered" align="center">
		<tr>
			<th>Staff Name</th>
			<th>Salary</th>
			<th>Attendance</th>
			<th>Amount</th>
			<th></th>

		</tr>
<?php
		$i=1;
		$curdate=date('m-Y');
		$attendancedate="date_format(now(),'%d-%m-%Y')";
$qry="SELECT a.empname,a.mobilenumber,a.empid,a.fulldaysalary,a.empid,a.halfdaysalary,sum(b.status) as attendance  from tblemployee as a left outer join tblattendance as b  on a.softdelete=0 and a.empid=b.empid and b.attendancedate like '__-$curdate%'   group by a.empname,a.mobilenumber,a.empid,a.fulldaysalary,a.empid,a.halfdaysalary order by a.empname; ";
$empdata=$con->query($qry);
			while($emprow=mysqli_fetch_array($empdata))
			{
				?>
					<tr>
<td><?php echo ucwords($emprow["empname"])?></td>
<td>Rs. <?php echo $emprow["halfdaysalary"] ?>- Rs. <?php echo $emprow["fulldaysalary"] ?></td>
<td><?php echo ucwords($emprow["attendance"])?></td>

</td>
<td>
<input type='hidden' name='txtempid[]' value='<?php  echo $emprow["empid"] ?>' />

<input autofocus="on" type="number" name="txtamountpaid<?php  echo $emprow["empid"] ?>" >
</td>
					</tr>
				<?php
			}
			?>
<tr>
	<td colspan="4" align="center">

		<input class="btn btn-success" type="submit" name="btnsubmit" value="Submit">
	</td>
</tr>
	</table>
</form>

<table class="table table-bordered" align="center">
<tr>
	<th>Employee Name</th>
	<th>Dated</th>
	<th>Amount Paid</th>

</tr>
<?php 
$cdate=date('d-m-Y');
print($cdate);
$data=$con->query("select sum(a.amountpaid) as amtpaid ,a.paidon,b.empname from tblpaymentinfo as a inner join tblemployee as b  on a.paidon='$cdate' and a.empid=b.empid and b.softdelete=0 group by a.paidon,b.empname");
$total=0;
while($row=mysqli_fetch_array($data))
{
$total+=floatval($row["amtpaid"]);
?>
	<tr>
		<td><?php echo ucwords($row["empname"]) ?> </td>
		<td><?php echo $row["paidon"] ?> </td>
		<td><?php echo $row["amtpaid"] ?> Rs/-</td>

	</tr>
<?php
}
?>
<tr>
  <td colspan="2"><b>Total Payment Details as on <?php echo $cdate ?></b></td>
  <td><b><?php echo $total ?>Rs. /-</b></td>
</tr>

</table>

	<?php include("design/last.php") ?>

</body>
</html>