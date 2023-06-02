
<?php 
if(isset($_REQUEST["staffid"]))
{
	  $con=mysqli_connect("localhost","root","admin","vim");
	$stmt=$con->prepare("delete from tblstaffreg where staffid=?");
	$stmt->bind_param("i",$_REQUEST["staffid"]);
	$i=$stmt->execute();
	if($i==1)
	{
		header("Location:staffregsearch.php?msg=1");

	}
}
?>