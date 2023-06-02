uo<!DOCTYPE html><html>
<head>
    <?php include("design/head.php") ?>
  <title>Search</title>
</head>
<body>
    <?php include("connection.php") ?>
    <?php include("design/librarymid.php") ?>
 
  <form name="frmsearch" method="post" action="returnbook.php">
    <table align="center" >
      <tr>
        <td>
          <input type="text" size="50%" name="txtsearch"  placeholder="Enter Register No." autofocus="on" autocomplete="off" maxlength="30">
          <input type="submit" name="btnsearch" class="btn btn-primary" value="Get Data">
          
        </td>
      </tr>
    </table>
  </form>
    <?php
    if(isset($_POST["txtsearch"]))
    {
          $search=$_POST["txtsearch"];
          
    $data=$con->query("select issueid,bookisbn,issuedate,regno from tblbookissue where regno='$search' and returndate='-';");
          while($row=mysqli_fetch_array($data))
          {
            
            ?>
         <form name="frmsave" method="post" action="returnbookupdt.php">
       
        <table class="table table-bordered" align="center" border="1">
 
            <tr><td><b>Book ISBN No</td><td><?php echo $row["bookisbn"] ?></td></tr>
            <tr><td><b>Issue Date</b> </td><td><?php echo $row["issuedate"] ?></td></tr>
            <tr>
              <td><b>Return Status</b></td>
              <td>
                <input type="hidden" name="issueid" value="<?php echo $row["issueid"] ?>"> 
                <select name="returnstatus"  required class="from-select" >
                  <option value="">Select Return Status </option>
                  <option value="Returned ">Returned</option>
                  <option value="Damaged">Damaged</option>
                  <option value="Lost" > Lost</option>
                </select>
              </td>

            </tr>
<tr>
  <td align="center" colspan="2">
   <input type="reset" class="btn btn-warning" name="btnsubmit" value="Cancel">
 
    <input type="submit" name="btnsubmit" class="btn btn-success" value="Return">
     

  </td>

</tr>
</table>
</form>
          
 
            <?php 
          


          }
          $con->close();
          ?>
          
        </table>
        <?php } ?>

  <?php include("design/last.php") ?>
</body>
</html>