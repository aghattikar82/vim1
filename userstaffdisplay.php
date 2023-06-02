<!DOCTYPE html>
<html>
<head>
  <?php include("design/head.php") ?>

    	<title>Display Staff</title>
</head>
<body>
  <?php include("design/userstaffmid.php") ?>
    <?php include("connection.php") ?>
	<table align="center" border="1">
		 <tr>
                 <td><b>Staff Id</b></td>
                 <td><b>Name</b></td>
                <td><b>Designation</b></td>
                <td><b>Education</b></td>
                <td><b>Work Experience</b></td>
                <td><b>Mobile Number</b></td>
                <td><b>Emailid</b></td>
               
              </tr>
        <?php
        
       $data=$con->query("select staffid,name,designation,education,workexperience,mobilenumber,emailid from userstaffregister order by staffid");
        while($row=mysqli_fetch_array($data))
          {
            print("<tr><td>".$row["staffid"]."</td>");
            print("<td>".$row["name"]."</td>");
            print("<td>".$row["designation"]."</td>");
            print("<td>".$row["education"]."</td>");
            print("<td>".$row["workexperience"]."</td>");
            print("<td>".$row["mobilenumber"]."</td>");
            print("<td>".$row["emailid"]."</td></tr>");
          }
        $con->close();
        ?>
         
		
	</table>

<?php include("design/last.php") ?>
</body>
</html>