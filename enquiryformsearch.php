<!DOCTYPE html>
<html>
<head>
    
  <title>Search</title>
</head>
<body>
    <?php include("enquiryformdelete.php") ?>
  <?php include("connection.php") ?>
  <?php include("msg.php") ?>
  <form name="frmsearch" method="post" action="enquiryformsearch.php">
    <table align="center" >
      <tr>
        <td>
          <input type="text" size="50%" name="txtsearch" required placeholder="Enter Enquiry ID" autofocus="on" autocomplete="off" maxlength="30">
          <input type="submit" name="btnsearch" value="Display">
          
        </td>
      </tr>
    </table>
    <?php
    if(isset($_POST["txtsearch"]))
    {
        ?><table align="center" border="1">
        <tr>
             <th>Course</th>
            <th>Full Name</th>
            <th>Date Of Birth</th>
            <th>Address</th>
            <th>Student Number</th>
            <th>Parents Number</th>
            <th>Father Name</th>
            <th>Mother Number</th>
            <th>Average Family Income</th>
            <th>Enquiry Date</th>

        </tr>
          <?php 
          $search=$_POST["txtsearch"];
          
          $data=$con->query("select eid,course,fname,dob,address,snumber,pnumber,fname,mname,afincome,edate from tblenquiryform where eid='$search' or fname like '%$search%' order by eid");
          while($row=mysqli_fetch_array($data))
          {
            print("<tr><td>".$row["course"]."</td>");
            print("<td>".$row["fname"]."</td>");
            print("<td>".$row["dob"]."</td>");
            print("<td>".$row["address"]."</td>");
            print("<td>".$row["snumber"]."</td>");
            print("<td>".$row["pnumber"]."</td>");
            print("<td>".$row["fname"]."</td>");
            print("<td>".$row["mname"]."</td>");
            print("<td>".$row["afincome"]."</td>");
            print("<td>".$row["edate"]."</td>");
            print("<td><a href='enquiryformdelete.php?eid=".$row["eid"]."'>Delete</a></td></tr>");
            
          }
          $con->close();
          ?>
          
        </table>
        <?php } ?>

</form>
</body>
</html>