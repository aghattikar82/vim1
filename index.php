
<!DOCTYPE html>
<html>
<head>
  <?php include("design/head.php") ?>
  <title>Staff Login</title>
  
</head>
<body>
  <?php include("design/mid.php") ?>
  <?php include("design/msg.php") ?>
  <br/>  <br/>  <br/>  <br/>
  <form name="frmlogin" method="post" action="checklogin.php">
  <center>
    <font color="red">*</font>
    <font size="2">Indicates Compulsary Fields</font>
  </center>

    <table style="width: 50%;" align="center" >
     <tr>
    <td>
      <font color="red" >*</font>Enter Login Id:
    </td>
    <td>
     <input type="number"  class="form-control" name="staffid" placeholder="Enter Login Id" required autofocus="on" autocomplete="off" min="1"> 
    </td>
   
  </tr>
  <tr>
    <td colspan="2">
      <hr/>
    </td>
  </tr>
 
  <tr>
    <td>
      <font color="red" >*</font>Enter Password:
                    
    </td>
    <td>
      <input type="password" class="form-control" name="password" required placeholder="Enter Password" >
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <hr/>
    </td>
  </tr>
  <tr>
    <td colspan="2"><br>
      <center>
      <input type="submit" name="btnlogin" class="btn btn-success" value="Login">
    </td></center>
  </tr>
</table>

  </form>
    <?php include("design/last.php") ?>

</body>
</html>