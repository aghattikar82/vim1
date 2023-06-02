<!DOCTYPE html>
<html>
<head>
    
  <title>Search</title>
</head>
<body>
   
   
  <?php include("connection.php") ?>
  <?php include("msg.php") ?>
  <form name="frmsearch" method="post" action="issuebook.php">
    <table align="center" >
      <tr>
        <td>
          <input type="text" required size="50%" name="txtsearch"  placeholder="Enter Student Id" autofocus="on" autocomplete="off" maxlength="30">
          
        </td>
      </tr>
   
    <?php
    if(isset($_POST["txtsearch"]))
    {
        ?><table align="center" border="1">
        <tr>
            <th>Student Name </th>
            <th>Student Mobile Number </th>
            <th>Course</th>  
           
        </tr>
          <?php 
          $search=$_POST["txtsearch"];
          
          $data=$con->query("select sid,sname,s_mobile_no,course, from admission where sid='$search' or sname like '%$search%' or course like '$search%' order by sid");
          while($row=mysqli_fetch_array($data))
          {
            print("<tr><td>".$row["sname"]."</td>");
            print("<td>".$row["s_mobile_no"]."</td>");
            print("<td>".$row["course"]."</td>");
          
            ?>
    <td>
            <form name="frmsave" method="POSt" action="issuebooksave.php">
              <input type="hidden" name="regno"  value="<?php echo $row["regno"] ?>"/>
              <input type="number" name="isbnnumber"  required placeholder="Enter ISBN No."/>
            <input type="submit" value="btnsubmit" value="Issue Book">
            </form>
    </td>
            <?php 
            
          }
          $con->close();
          ?>
          
        </table>
  
         

       <?php } ?>
         
</form>

</body>
</html><!DOCTYPE html>
<html>
<head>
    
  <title>Search</title>
</head>
<body>
   
   
  <?php include("connection.php") ?>
  <?php include("msg.php") ?>
  <form name="frmsearch" method="post" action="issuebook.php">
    <table align="center" >
      <tr>
        <td>
          <input type="text" required size="50%" name="txtsearch"  placeholder="Enter Student Id" autofocus="on" autocomplete="off" maxlength="30">
          
        </td>
      </tr>
   
    <?php
    if(isset($_POST["txtsearch"]))
    {
        ?><table align="center" border="1">
        <tr>
            <th>Student Name </th>
            <th>Student Mobile Number </th>
            <th>Course</th>  
           
        </tr>
          <?php 
          $search=$_POST["txtsearch"];
          
          $data=$con->query("select sid,sname,s_mobile_no,course, from admission where sid='$search' or sname like '%$search%' or course like '$search%' order by sid");
          while($row=mysqli_fetch_array($data))
          {
            print("<tr><td>".$row["sname"]."</td>");
            print("<td>".$row["s_mobile_no"]."</td>");
            print("<td>".$row["course"]."</td>");
          
            ?>
    <td>
            <form name="frmsave" method="POSt" action="issuebooksave.php">
              <input type="hidden" name="regno"  value="<?php echo $row["regno"] ?>"/>
              <input type="number" name="isbnnumber"  required placeholder="Enter ISBN No."/>
            <input type="submit" value="btnsubmit" value="Issue Book">
            </form>
    </td>
            <?php 
            
          }
          $con->close();
          ?>
          
        </table>
  
         

       <?php } ?>
         
</form>

</body>
</html>