<?php include("connection.php")?>
<?php 
if(isset($_REQUEST["staffleaveid"]))
{
	$stmt=$con->prepare("delete from tblstaffleave where staffleaveid=?");
	$stmt->bind_param("i",$_REQUEST["staffleaveid"]);
	$i=$stmt->execute();
	if($i==1)
	{
		header("Location:staffleaveregister.php?msg=Deleted Successfully");

	}
}
?>