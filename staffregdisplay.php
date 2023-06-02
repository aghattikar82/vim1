<!DOCTYPE html>
<html>
<head>
    
    	<title>Display </title>
</head>
<body>
   

	<h1 align="center">Staff Details</h1>
    <table align="center" border="1">
		<tr>
			<th>Name</th>
			<th>Designation</th>
            <th>Education</th>
            <th>Mobile Number</th>
            <th>Email ID</th>
           
           
        </tr>
        <?php
        $con=mysqli_connect("localhost","root","admin","vim");
        $data=$con->query("select name,designation,education,phone_no,email from tblstaffreg order by staffid");
        while($row=mysqli_fetch_array($data))
        {

        	print("<tr><td>".$row["name"]."</td>");
        	print("<td>".$row["designation"]."</td>");
            print("<td>".$row["education"]."</td>");
            print("<td>".$row["phone_no"]."</td>");
            print("<td>".$row["email"]."</td></tr>");
        } 
        $con->close();
        ?>
		
	</table>
    

</body>
</html>