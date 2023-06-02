<!DOCTYPE html><html>
<head>
    <?php include("design/head.php") ?>
  <title>Search</title>
</head>
<body>
    <?php include("connection.php") ?>
    <?php include("design/librarymid.php") ?>
 
  <form name="frmsearch" method="post" action="issuebook.php">
    <table align="center" >
      <tr>
        <td>
          <input type="text" size="50%" name="txtsearch"  placeholder="Enter Register Number " autofocus="on" autocomplete="off" maxlength="30">
          <input class="btn btn-primary" type="submit" name="btnsearch" value="Display">
          
        </td>
      </tr>
    </table>
<br/>
  </form>
    <?php
    if(isset($_POST["txtsearch"]))
    {
        ?>
     <form name="frmsave" method="post" action="issuebooksave.php">
       
        <table class="table table-bordered" align="center" border="1">
          <?php 
          $search=$_POST["txtsearch"];
          
    $data=$con->query("select sid,sname,s_mobile_no,course,regno from admission where regno='$search' ");
          while($row=mysqli_fetch_array($data))
          {
print("<tr><td><b>Student Name</b></td><td>".$row["sname"]."</td></tr>");
print("<tr><td><b>Mobile Number</b></td><td>".$row["s_mobile_no"]."</td></tr>");
print("<tr><td><b>Course</b></td><td>".$row["course"]."</td></tr>");
     
            ?>
 <tr>
  <td><b>Book ISBN Number</b></td>
    <td>
          
             
              <input type="hidden" name="regno"  value="<?php echo $row["regno"] ?>"/>
              <input type="number" class="form-control" name="isbnnumber"  required placeholder= "Enter ISBN No."/>
    </td>          
  </tr>
<tr>
  <td colspan="2" align="center">
            <input class="btn btn-warning" type="reset" name="btncancel" value="Cancel">

            <input type="submit"  align="center" class="btn btn-success" value="Issue Book" >
  </td>
</tr>
            <?php 
          


          }
          $con->close();
          ?>
          
        </table>
        <?php } ?>

  <?php include("design/last.php") ?>
</body>
</html>