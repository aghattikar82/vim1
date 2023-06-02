<html>
<head>
    
    	<title>Display </title>
</head>
<body>
   

	<h1 align="center">Subject Master Details</h1>
    <table align="center" border="1">
		<tr>
			<th>Subject Name</th>
			<th>Semester</th>
            <th>Course</th>
                
        </tr>
        <?php
        $con=mysqli_connect("localhost","root","admin","vim");
        $data=$con->query("select subname,semister,course  from tblsubjectmaster order by subid");
        while($row=mysqli_fetch_array($data))
        {

        	print("<tr><td>".$row["subname"]."</td>");
        	print("<td>".$row["semister"]."</td>");
            print("<td>".$row["course"]."</td>");

        } 
        $con->close();
        ?>
		
	</table>
    

</body>
</html>