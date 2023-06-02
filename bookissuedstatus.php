<!DOCTYPE html><html>
<head>
  <title>Search</title>


</head>
<body>
    <?php include("connection.php") ?>
 
  <form name="frmsearch" method="post" action="admsearch.php">
    <table align="center" >
      <tr>
        <td>
          <input type="text" size="50%" name="txtsearch" required placeholder="Enter Student ID or Student Name" autofocus="on" autocomplete="off" maxlength="30">
          <input type="submit" name="btnsearch" value="Search">
          
        </td>
      </tr>
    </table>
    <?php
    if(isset($_POST["txtsearch"]))
    {
        ?><table align="center" border="1">
        
     <tr>
        <td><b>Student Name </b></td>
        <td><b>Father Name </b></td>
        <td><b>Mobile Number</b></td>
        <td><b>Register Number</b></td>
        <td><b>Book ISBN Number</b></td>
        <td><b>Book return Date</b></td>
               

               
              </tr>
          <?php 
          $search=$_POST["txtsearch"];
          
    $data=$con->query("select sname,fname,mname,aplno,s_mobile_no,semail,s_image from admission where sid='$search' or sname like '%$search%' ");
          while($row=mysqli_fetch_array($data))
          {
            print("<tr><td>".$row["sname"]."</td>");
            print("<td>".$row["fname"]."</td>");
            print("<td>".$row["s_mobile_no"]."</td>");
            print("<td>".$row["regno"]."</td>");
            print("<td>".$row["bookisbn"]."</td>");
            print("<td>".$row["retundate"]."</td>");
            print("<td>".$row["bookisbn"]."</td>");
            print("<td>".$row["retundate"]."</td>");
           
            print("<td>".$row["s_image"]."</td></tr>");
          }
          $con->close();
          ?>
          
        </table>
        <?php } ?>

</form>

</body>
</html>