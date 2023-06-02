<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<?php include("design/head.php") ?>
</head>
<body>
	<?php include("design/staffmid.php") ?>
<h2>Student Attendance</h2>

<?php 
	$data=$con->query("SELECT a.sname,a.course,a.sid,b.status,a.s_mobile_no  from admission as a inner join tblstudentattendence as b   on a.sid=b.sid and   b.attendencedate=date_format(now(),'%d-%m-%Y') order by sname");
	$count=mysqli_num_rows($data);
	if($count>0)
	{

?>
	<table class="table table-bordered" align="center">
		<tr>
			<th>Student Name</th>
			<th>Course</th>
			<th>Mobile Number</th>
			<th>Attendance</th>

		</tr>
<?php
		$i=1;
			while($emprow=mysqli_fetch_array($data))
			{
				?>
					<tr>
						<td><?php echo ucwords($emprow["sname"])?></td>
						<td><?php echo ($emprow["course"])?></td>
						<td><?php echo $emprow["s_mobile_no"]?></td>
					<td>
							<?php
if(intval($emprow["status"])==1)
									print("PRESENT");

								else if(intval($emprow["status"])==2)
									print("ABSENT");
								
								
							 ?>

					</td>

					</tr>
				<?php
			}
			?>
	</table>

<?php 
	}
	else
	{

?>
<form name="frmattendance" method="post" action="studentattendencesave.php">
	<table class="table table-bordered" align="center">
		<tr>
			<th>Staff Name</th>
			<th>Mobile Number</th>
			<th>Course</th>

		</tr>
<?php
		$con->close();
		include("connection.php"); 
		$i=1;
			$empdata=$con->query("SELECT sname,s_mobile_no,sid,present,absent,course  from admission order by sid;");
			while($emprow=mysqli_fetch_array($empdata))
			{
				?>
					<tr>
						<td><?php echo ucwords($emprow["sname"])?></td>
						<td><?php echo ucwords($emprow["course"])?></td>
						<td><?php echo $emprow["s_mobile_no"]?></td>
<td>
<input autofocus="on" type='hidden' name='hdsid[]' value='<?php  echo $emprow["sid"] ?>' />
<select name="ddlattendance[]" class="form-select">
		<option value="1">PRESENT</option>
		<option value="2">ABSENT</option>


</select>
</td>

					</tr>
				<?php
			}
			?>
			<tr>
				<td colspan="5" align="center">
						<input type="submit" name="btnsubmit" value="Set Attendance" class="btn btn-success">
						<input type="reset" name="btncancel" value="Cancel" class="btn btn-warning">
				</td>
			</tr>
	</table>
</form>
<?php } ?>
	<?php include("design/last.php") ?>

</body>
</html>