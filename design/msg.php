<div style="height: 40px;">
<font size="4">
<center>
<?php 
    if(isset($_SESSION["msg"]))
    {
      print($_SESSION["msg"]);
    }
    $_SESSION["msg"]=null;
?>

</center>
</font>
</div>