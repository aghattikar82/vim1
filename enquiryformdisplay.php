<!DOCTYPE html>
<html>
<head>
    
    	<title>Display</title>
</head>
<body>
 
    <?php include("connection.php") ?>
	<table align="center" border="1">
		<tr>
		
        <td><b>Course </b></td>
        <td><b>Full Name</b></td>
        <td><b>Date Of Birth</b></td>
        <td><b>Address</b></td>
        <td><b>Student Number</b></td>
        <td><b>Parents Number</b></td>
        <td><b>Father Name</b></td>
        <td><b>Mother Name</b></td>
        <td><b>Average Family Income</b></td>
        <td><b>Enquiry Date</b></td>
        
        </tr>
        <?php
        
        $data=$con->query("select course,fullname,dob,address,snumber,pnumber,fname,mname,afincome,edate from tblenquiryform order by eid");
        while($row=mysqli_fetch_array($data))
        {

        	print("<tr><td>".$row["course"]."</td>");
            print("<td>".$row["fullname"]."</td>");
            print("<td>".$row["dob"]."</td>");
            print("<td>".$row["address"]."</td>");
            print("<td>".$row["snumber"]."</td>");
            print("<td>".$row["pnumber"]."</td>");
            print("<td>".$row["fname"]."</td>");
            print("<td>".$row["mname"]."</td>");
            print("<td>".$row["afincome"]."</td>");
            print("<td>".$row["edate"]."</td>");
        } 
        $con->close();
        ?>
		
	</table>
    

</body>
</html>