<!DOCTYPE html>
<html>
<head>
    <?php include("design/head.php") ?>
  <title>Search</title>
</head>
<body>
    <?php include("design/librarymid.php") ?>
    <h2></h2>
 
  <?php include("connection.php") ?>
  <?php include("msg.php") ?>
  <form name="frmsearch" method="post" action="issuedbookdisplay.php">
    <table align="center" class="table table-bordered" style="width:50%;">
      <tr>
        <td>
       
       <select  class="form-control" name="" id="">
          <option value="">Select option </option>
          <option value="regno">Register Number</option>
          <option value="bookisbn">Book ISBN</option>
          <option value="issuedate" >Issue Date </option>
    </select></td>
    <td>
          <input type="submit" name="btnsearch" class="btn btn-success" value="Display">
          
        </td>
      </tr>
    </table>
    <?php
    if(isset($_POST["txtsearch"]))
    {
        ?><table align="center" border="1">
        <tr>
        <td><b>Student Name</b></td>
        <td><b>Father Name</b></td>
        <td><b>Mobile Number</b></td>
        <td><b>Register Number</b></td>
        <td><b>Book ISBN Number</b></td>
        <td><b>Book Issued  Date</b></td>
        </tr>
          <?php 
          $search=$_POST["txtsearch"];
          
          $data=$con->query("select admission.sname,admission.fname,admission.s_mobile_no,admission.regno,tblbookissue.bookisbn,tblbookissue.issuedate from admission  inner join tblbookissue on admission.regno=tblbookissue.regno where admission.regno='$search' or bookisbn like '%$search%' or issuedate!='-' ");
          while($row=mysqli_fetch_array($data))
          {
          print("<tr><td>".$row["sname"]."</td>");
          print("<td>".$row["fname"]."</td>");
          print("<td>".$row["s_mobile_no"]."</td>");
          print("<td>".$row["regno"]."</td>");
          print("<td>".$row["bookisbn"]."</td>");
          print("<td>".$row["issuedate"]."</td></tr>");
           
          }
          $con->close();
          ?>
          
        </table>
        <?php } ?>

</form>
<?php include("design/last.php") ?>
</body>
</html>