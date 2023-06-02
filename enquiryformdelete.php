<?php include("connection.php")?>
<?php 
if(isset($_REQUEST["eid"]))
{
	$stmt=$con->prepare("delete from tblenquiryform where eid=?");
	$stmt->bind_param("i",$_REQUEST["eid"]);
	$i=$stmt->execute();
	if($i==1)
	{
		header("Location:enquiryformsearch.php?msg=1");

	}
}
?>