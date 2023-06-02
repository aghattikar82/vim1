<!DOCTYPE html>
<html>
<head>

	<title>Search</title>
</head>
<body>
   
	<form name="frmsearch" method="post" action="staffregsearch.php">
		<table align="center" >
			<tr>
				<td>
					<input type="text" size="50%" name="txtsearch" required placeholder="Enter Staff ID" autofocus="on" autocomplete="off" maxlength="30">
					<input type="submit" name="btnsearch" value="Display">
					
				</td>
			</tr>
		</table>
		<?php
		if(isset($_POST["txtsearch"]))
		{
        ?><table align="center" border="1">
        <tr>
            <th>Name</th>
			<th>Designation</th>
            <th>Education</th>
            <th>Mobile Number</th>
            <th>Email ID</th>
           
           
        </tr>
        	<?php 
        	$search=$_POST["txtsearch"];
        	$con=mysqli_connect("localhost","root","admin","vim");
        	$data=$con->query("select staffid,name,designation,education,phone_no,email from tblstaffreg where staffid='$search' order by staffid  ");
        	while($row=mysqli_fetch_array($data))
        	{
        		print("<tr><td>".$row["name"]."</td>");
        		print("<td>".$row["designation"]."</td>");
                print("<td>".$row["education"]."</td>");
        		print("<td>".$row["phone_no"]."</td>");
        		print("<td>".$row["email"]."</td>");
        		print("<td><a href='staffregdelete.php?staffid=".$row["staffid"]."'>Delete</a></td></tr>");
        		
        	}
        	$con->close();
        	?>
        	
        </table>
        <?php } ?>

</form>
</body>
</html>