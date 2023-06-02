<?php include("connection.php")?>
<?php 
if(isset($_REQUEST["staffid"]))
{
	$stmt=$con->prepare("delete from staffregister where staffid=?");
	$stmt->bind_param("i",$_REQUEST["staffid"]);
	$i=$stmt->execute();
	if($i==1)
	{
		header("Location:staffregform.php?msg=Deleted Successfully");

	}
}
?>