<!DOCTYPE html>
<html>
<head>

	<title>Fees Master</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1 align="center">Fees Master</h1>
	<hr>
	<form  method="post" action="feesmastersave.php" class="container" enctype="multipart/form-data" style="text-align: left;">

<div class="row">
  <div class="form-group col-md-12">
    <label for="name"><b>Select Course</b></label>
   <select class="form-control" name="course" id="course">
      <option value="">Select Course </option>
      <option value="bba">BBA (Bachelor of Business Administration)</option>
      <option value="bca">BCA (Bachelor of Computer Application)</option>
      <option value="bcom" >B.com (Bachelor of Commerce) </option>
    </select>
  </div>
 </div>

 <div class="row">
  <div class="form-group col-md-12">
    <label for="name"><b>Year</b></label>
   <select class="form-control" name="year" id="year">
      <option value="">Select Year </option>
      <option value="1styear">1st Year</option>
      <option value="2ndyear">2nd Year</option>
      <option value="3rdyear">3rd Year</option>
    </select>
  </div>
 </div>


 <div class="row">
 	<div class="form-group col-md-12">
 	<div class="form-group">
  
  <label for="sel1"> Select Fees Head: </label>
  <select class="form-control" name="feeshead" required>
    <option>Select Fees Head</option>
    <?php
      try
      {
        $data=$con->query("select * from tblfeeshead ");
        while($row=mysqli_fetch_array($data))
        {
          ?>
            <option value="<?php echo  ucfirst($row["fheadid"])?>"><?php echo  ucfirst($row["feeshead"])?></option>   <?php 
        }
      }
      catch(Exception $exe){}
       ?>
    </select>
    </div>  
 </div>
</div>

<div class="row">
  <div class="form-group col-md-12">
   <label for="name"><b>Paying Amount  </b></label>
    <input type="number" class="form-control" placeholder="Enter Paying  Amount" name="payingamount" id="payingamount"  required>
</div>
</div>
<div class="row">
<div class="form-group col-md-12">
  <br/>
  <button class="form-control btn btn-success" name="btnsubmit"  >Submit</button>
</div>
</div>


</form>
</body>
</html>