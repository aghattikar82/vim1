<!DOCTYPE html>
<html>
<head>
    <?php include("design/head.php") ?>
  <title>Library Card</title>

<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

</head>

<body>
    <?php include("design/librarymid.php") ?>
   <?php include("connection.php") ?>
  <?php include("msg.php") ?>
  <form name="frmsearch" method="post" action="generatelibcard.php">
    <table align="center"  >
      <tr>
        <td>
          <input type="text" size="50%" name="txtsearch" required placeholder="Enter Register Number" autofocus="on" autocomplete="off" maxlength="30">
          <input type="submit" name="btnsearch" value="Display">
          
        </td>
      </tr>

    </table>
  </form>
    <?php
    if(isset($_POST["txtsearch"]))
    {
        ?>
     <form name="frmsave" method="post" action="generatelibcard.php">
       <div id="print" >
        <table class="table table-bordered" style="width: 50%;height: 20%;"  align="center" border="1">
          <?php 
          $search=$_POST["txtsearch"];
          
    $data=$con->query("select sid,sname,s_mobile_no,course,regno,s_image from admission where regno='$search' ");
          while($row=mysqli_fetch_array($data))
          {
print( "<tr><b><center>Library Card</center></b></tr>");

 print("<tr><td><center> <img colspan='2' align='center' height='80' width='60' src='student/".$row["s_image"]."'></center> </td></tr>");
print("<tr><td><b>Student Name</b></td><td>".$row["sname"]."</td></tr>");
print("<tr><td><b>Mobile Number</b></td><td>".$row["s_mobile_no"]."</td></tr>");
print("<tr><td><b>Course</b></td><td>".$row["course"]."</td></tr>");
 
         
          }
          $con->close();
          ?>

        </table>
      </div>
        <?php } ?>


      </form>
      <tr><center><input type = "button" class="btn btm-success" value = "Print" onclick = "printDiv('print')" /></center></tr>
<?php include("design/last.php") ?>
</body>
</html>