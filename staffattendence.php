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
	<?php include("design/adminmid.php") ?>
<h2>Staff Attendance</h2>

<?php 
	$data=$con->query("SELECT a.name,a.designation,a.staffid,b.status,a.mobilenumber    from userstaffregister as a inner join tblstaffattendence as b   on a.staffid=b.staffid and   b.attendencedate=date_format(now(),'%d-%m-%Y') order by name");
	$count=mysqli_num_rows($data);
	if($count>0)
	{

?>
	<table class="table table-bordered" align="center">
		<tr>
			<th>Staff Name</th>
			<th>Mobile Number</th>
			<th>Attendance</th>

		</tr>
<?php
		$i=1;
			while($emprow=mysqli_fetch_array($data))
			{
				?>
					<tr>
						<td><?php echo ucwords($emprow["name"])?></td>
						<td><?php echo $emprow["mobilenumber"]?></td>
					<td>
							<?php
if(intval($emprow["status"])==1)
									print("FULL DAY");

								else if(intval($emprow["status"])==.5)
									print("HALF DAY");
								else if(intval($emprow["status"])==0)
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
<form name="frmattendance" method="post" action="staffattendencesave.php">
	<table class="table table-bordered" align="center">
		<tr>
			<th>Staff Name</th>
			<th>Mobile Number</th>
			<th></th>

		</tr>
<?php
		$con->close();
		include("connection.php");
		$i=1;
			$empdata=$con->query("SELECT name,mobilenumber,staffid,halfdaysalary,fulldaysalary,designation  from userstaffregister order by staffid;");
			while($emprow=mysqli_fetch_array($empdata))
			{
				?>
					<tr>
						<td><?php echo ucwords($emprow["name"])?></td>
						<td><?php echo $emprow["mobilenumber"]?></td>
<td>
<input autofocus="on" type='hidden' name='hdsid[]' value='<?php  echo $emprow["staffid"] ?>' />
<select name="ddlattendance[]" class="form-select">
		<option value="1">FULL DAY</option>
		<option value="0.5">HALF DAY</option>
		<option value="0">ABSENT</option>


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