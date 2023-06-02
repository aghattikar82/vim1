<!DOCTYPE html>
<html>
<head>
   <?php include("design/head.php") ?>
        <title>Staff Display</title>
</head>
<body>
   <?php include("design/userstaffmid.php") ?>
    <?php include("connection.php") ?>
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
        
       $data=$con->query("select staffleaveid,subject,matter,leavedate,noofdays,updatedon from tblstaffleave  order by staffleaveid");
       while($row=mysqli_fetch_array($data))
            {
                print("<tr><td>".$row["staffleaveid"]."</td>");
                print("<td>".$row["subject"]."</td>");
                print("<td>".$row["matter"]."</td>");
                print("<td>".$row["leavedate"]."</td>");
                print("<td>".$row["noofdays"]."</td>");
                print("<td>".$row["updatedon"]."</td></tr>");
                
            }
        $con->close();
        ?>
        
    </table>
   
<?php include("design/last.php") ?>
</body>
</html>