<!DOCTYPE html>
<html>
<head>
    <?php include("design/head.php") ?>
	<title>Staff Search</title>
</head>
<body>
     <?php include("design/userstaffmid.php") ?>
    <?php include("staffleavedelete.php") ?>
	<?php include("connection.php") ?>
	<?php include("msg.php") ?>
	<form name="frmsearch" method="post" action="staffleavesearch.php">
		<table align="center" >
			<tr>
				<td>
					<input type="text" size="50%" name="txtsearch" required placeholder="Enter ID" autofocus="on" autocomplete="off" maxlength="30">
					<input type="submit" name="btnsearch" value="Display">
					
				</td>
			</tr>
		</table>
		<?php
		if(isset($_POST["txtsearch"]))
		{
        ?>
        <table align="center" border="1">
        <tr>
            <th>Staff Leave Id</th>
            <th>Subject</th>
            <th>Matter</th>
            <th>Leave Date</th>
            <th>No Of Leave days</th>
            <th>Updatedon</th>
        </tr>
        	<?php 
        	$search=$_POST["txtsearch"];
        	$data=$con->query("select staffleaveid,subject,matter,leavedate,noofdays,updatedon from tblstaffleave where staffleaveid='$search'");
        	while($row=mysqli_fetch_array($data))
        	{
        		print("<tr><td>".$row["staffleaveid"]."</td>");
                print("<td>".$row["subject"]."</td>");
                print("<td>".$row["matter"]."</td>");
                print("<td>".$row["leavedate"]."</td>");
                print("<td>".$row["noofdays"]."</td>");
                print("<td>".$row["updatedon"]."</td>");
        		print("<td><a href='staffleavedelete.php?staffleaveid=".$row["staffleaveid"]."'>Delete</a></td></tr>");
        		
        	}
        	$con->close();
        	?>
        	
        </table>
        
        <?php } ?>

</form>
 <?php include("design/last.php") ?>
</body>
</html>