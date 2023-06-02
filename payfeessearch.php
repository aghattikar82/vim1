<!DOCTYPE html>
<html>
<head>
  <?php include("design/head.php") ?>
    
  <title>Search</title>
</head>
<body>

  <?php include("design/accountmid.php") ?>
  <?php include("payfeesdelete.php") ?>
  <?php include("connection.php") ?>
  <?php include("msg.php") ?>

  <form name="frmsearch" method="post" action="payfeessearch.php">

    <table align="center" >
      <tr>
        <td>

          <input type="text" size="50%" name="txtsearch" required placeholder="Enter Fees ID" autofocus="on" autocomplete="off" maxlength="30">
          <input class="btn btn-primary" type="submit" name="btnsearch" value="Display">
          
        </td>
      </tr>
    </table>
    <?php
    if(isset($_POST["txtsearch"]))
    {

    ?><table align="center" class="table table-border">
        <tr>
            <th>Name</th>
            <th>Course</th>
            <th>Year</th>
            <th>Amount Paid</th>
        </tr>

    <?php 
          $search=$_POST["txtsearch"];
          
          $data=$con->query("select pid,name,year,course,amountpaid from tblpayfees where pid='$search' or name like '%$search%' order by pid");
          while($row=mysqli_fetch_array($data))

          {
            print("<tr><td>".$row["name"]."</td>");
            print("<td>".$row["course"]."</td>");
            print("<td>".$row["year"]."</td>");
            print("<td>".$row["amountpaid"]."</td>");
            print("<td><a href='payfeesdelete.php?pid=".$row["pid"]."'>Delete</a></td></tr>");
            
          }
          $con->close();
          ?>
          
        </table>
        <?php } ?>

</form>

<?php include("design/last.php") ?>

</body>
</html>