<!DOCTYPE html>
<html>
<head>
    
    	<title>Display</title>
</head>
<body>
    
 
    <?php include("connection.php") ?>
	<table align="center" class="table-bordered" border="1">
		<tr>
		
        <td><b>Course </b></td>
        <td><b>Fees Head</b></td>
        <td><b>Year </b></td>
        <td><b>Paying Amount</b></td>
        
        </tr>
        <?php
        
        $data=$con->query("select course,year,feeshead,payingamount from tblfeesmaster order by fid");
        while($row=mysqli_fetch_array($data))
        {

        	print("<tr><td>".$row["course"]."</td>");
            print("<td>".$row["year"]."</td>");
            print("<td>".$row["feeshead"]."</td>");
            print("<td>".$row["payingamount"]."</td>");
        } 
        $con->close();
        ?>
		
	</table>

    

</body>
</html>