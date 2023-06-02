<!DOCTYPE html>
<html>
<head>

    
  <title>Search</title>
</head>
<body>

  <?php include("feesmasterdelete.php") ?>
  <?php include("connection.php") ?>
  <?php include("msg.php") ?>
  <form name="frmsearch" method="post" action="feesmastersearch.php">
    <table align="center" >
      <tr>
        <td>
          <input type="text" size="50%" name="txtsearch" required placeholder="Enter Fees ID" autofocus="on" autocomplete="off" maxlength="30">
          <input type="submit" class="btn btn-success" name="btnsearch" value="Display">
          
        </td>
      </tr>
    </table>
    <?php
    if(isset($_POST["txtsearch"]))
    {
        ?><table align="center" border="1">
        <tr>
            <th>Course</th>
            <th>Year</th>
            <th>Fees Head</th>
            <th>Paying Amount</th>
        </tr>
          <?php 
          $search=$_POST["txtsearch"];
          
          $data=$con->query("select fid,course,year,feeshead,payingamount from tblfeesmaster where fid='$search' or course like '%$search%' order by fid");
          while($row=mysqli_fetch_array($data))
          {
            print("<tr><td>".$row["course"]."</td>");
            print("<td>".$row["year"]."</td>");
            print("<td>".$row["feeshead"]."</td>");
            print("<td>".$row["payingamount"]."</td>");
            print("<td><a href='feesmasterdelete.php?fid=".$row["fid"]."'>Delete</a></td></tr>");
            
          }
          $con->close();
          ?>
          
        </table>
        <?php } ?>

</form>


</body>
</html>