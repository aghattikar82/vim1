<?php include("connection.php")?>
<?php 
if(isset($_REQUEST["pid"]))
{
	$stmt=$con->prepare("delete from tblpayfees where pid=?");
	$stmt->bind_param("i",$_REQUEST["pid"]);
	$i=$stmt->execute();
	if($i==1)
	{
		header("Location:payfeessearch.php?msg=1");

	}
}
?>