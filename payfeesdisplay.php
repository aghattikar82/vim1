<!DOCTYPE html><html>
<head>
  <?php  include("connection.php") ?>
  <?php include("design/head.php") ?>

  <title>Search Reg_no</title>
</head>
<body>
    <?php include("connection.php") ?>
    <?php include("design/accountmid.php") ?>
 
  <form name="frmsearch" method="post" action="payfeesdisplay.php">
    <table align="center" >
      <tr>
        <td>
          <input type="text" size="50%" name="txtsearch"  placeholder="Enter Student Id  " autofocus="on" autocomplete="off" maxlength="30">
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
     <form name="frmsave" method="post" action="payfeessave.php">
       
        <table align="center" border="1" class="table table-bordered">
          <?php 
          $search=$_POST["txtsearch"];
          
    $data=$con->query("select sid,sname,s_mobile_no,course, regno from admission where sid='$search' ");
          while($row=mysqli_fetch_array($data))
          {
print("<tr><td><b>Student Name</b></td><td>".$row["sname"]."</td></tr>");
print("<tr><td><b>Mobile Number</b></td><td>".$row["s_mobile_no"]."</td></tr>");
print("<tr><td><b>Course</b></td><td>".$row["course"]."</td></tr>");

     
            ?>
 <tr>
  <td><b>Enter Amount</b></td>

  <td>

          
             
              <input type="hidden" name="regno"  value="<?php echo $row["regno"] ?>" />
              <input type="number" class="form-control" name="amountpaid"  required placeholder= "Enter Amount Paid"/>

     
    </td>          
  </tr>



<tr>
<td><b>Select Payment Mode</b></td>  
<td>

<select class="form-control" name="paymentmode" id="paymentmode">
      <option value="">Select Payment Mode </option>
      <option value="cash">Cash</option>
      <option value="dd">DD</option>
      <option value="cheque">Cheque</option>
      <option value="netbanking">Net Banking</option>
    </select>
</td>
</tr>
<tr>





  <td colspan="2" align="center">

            <input type="submit"  align="center" class="btn btn-success" value="Pay Amount" >
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