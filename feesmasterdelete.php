<?php include("connection.php")?>
<?php 
if(isset($_REQUEST["fid"]))
{
	$stmt=$con->prepare("delete from tblfeesmaster where fid=?");
	$stmt->bind_param("i",$_REQUEST["fid"]);
	$i=$stmt->execute();
	if($i==1)
	{
		header("Location:feesmastersearch.php?msg=1");

	}
}
?>S