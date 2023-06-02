<!DOCTYPE html><html>
<head>
   <?php include("design/head.php") ?>
  <title>Search</title>
</head>
<body>
   <?php include("design/staffmid.php") ?>
    <?php include("connection.php") ?>
 
  <form name="frmsearch" method="post" action="userstaffsearch.php">
    <table align="center" >
      <tr>
        <td>
           <label for="name"><font></font><b>Search Id :</b></label>
          <input type="text" size="50%" name="txtsearch" required placeholder="Enter Staff Id" autofocus="on" autocomplete="off" maxlength="30">
          <input type="submit" name="btnsearch" value="Display">
          
        </td>
      </tr>
    </table>
    <?php
    if(isset($_POST["txtsearch"]))
    {
        ?><table align="center" border="1">
        
     <tr align="center">
                 <td><b>Staff Id</b></td>
                 <td><b>Name</b></td>
                <td><b>Designation</b></td>
                <td><b>Education</b></td>
                <td><b>Work Experience</b></td>
                <td><b>Mobile Number</b></td>
                <td><b>Password</b></td>
                <td><b>Emailid</b></td>
               
              </tr>

          <?php 
          $search=$_POST["txtsearch"];
    $data=$con->query("select staffid,name,designation,education,workexperience,mobilenumber,password,emailid from userstaffregister where staffid='$search' ");
          while($row=mysqli_fetch_array($data))
          {
            print("<tr><td>".$row["staffid"]."</td>");
            print("<td>".$row["name"]."</td>");
            print("<td>".$row["designation"]."</td>");
            print("<td>".$row["education"]."</td>");
            print("<td>".$row["workexperience"]."</td>");
            print("<td>".$row["mobilenumber"]."</td>");
            print("<td>".$row["password"]."</td>");
            print("<td>".$row["emailid"]."</td>");
            print("<td><a href='staffregisterdelete.php?staffid=".$row["staffid"]."'>Delete</a></td></tr>");
          }
          $con->close();
          ?>
          
        </table>
        <?php } ?>

</form>
 <?php include("design/last.php") ?>
</body>
</html>