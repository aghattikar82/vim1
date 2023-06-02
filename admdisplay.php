<!DOCTYPE html>
<html>
<head>
    <?php include("design/head.php") ?>
    
    	<title>Display</title>
</head>
<body>
      <?php include("design/mngtmid.php") ?>
 
    <?php include("connection.php") ?>
	<table align="center" border="1" class="table table-bordered">
		<tr>
		
        <td><b>Student Name </b></td>
        <td><b>Father Name </b></td>
        <td><b>Mother Name</b></td>
        <td><b>Application Number</b></td>
        <td><b>Mobile Number</b></td>
        <td><b>Emailid</b></td>
        <td><b>Image</b></td>
        
        </tr>
        <?php
        
        $data=$con->query("select sname,fname,mname,aplno,s_mobile_no,semail,s_image from admission order by sid");
        while($row=mysqli_fetch_array($data))
        {

        	print("<tr><td>".$row["sname"]."</td>");
            print("<td>".$row["fname"]."</td>");
            print("<td>".$row["mname"]."</td>");
            print("<td>".$row["aplno"]."</td>");
            print("<td>".$row["s_mobile_no"]."</td>");
            print("<td>".$row["semail"]."</td>");
            print("<td><img height='60' width='40' src='student/".$row["s_image"]."'> </td></tr>");
        
        } 
        $con->close();
        ?>
		
	</table>
    
  <?php include("design/last.php") ?>
</body>
</html>