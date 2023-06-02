  <!DOCTYPE html>
<html>
<head>
    <?php include("design/head.php") ?>
	
	<title>Staff Leave Apply</title>
       <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



</head>
<body>
 <?php include("design/staffmid.php") ?>
    <h1 align="center">Staff Leave </h1>
<form style="text-align: left;" class="container"  autocomplete="off" action="staffleavesave.php"  method="post" role="form" >
<div class="form-group col-md-12">
   <label for="subject"><b>Subject</b></label>
    <input type="text" class="form-control" name="subject"  id="subject" required placeholder="Enter Subject">
</div>

<div class="form-group col-md-12">
   <label for="rfl"><b>Matter For Leave</b></label>
    <textarea name="matter" id="matter" placeholder="Matter For Leave" rows="3" class="form-control">
       
    </textarea>
</div>

<div class="form-group col-md-12">
   <label for="st"><b>Leave Date</b></label>
    <input type="date" class="form-control" name="leavedate"  id="leavedate" required placeholder="Enter Leave Date">
</div>

<div class="form-group col-md-12">
   <label for="nod"><b>Number Of Leave Days</b></label>
    <input type="text" class="form-control" name="noofleavedays"  id="noofleavedays" required placeholder="No Of Days">
</div>
<div class="row" align="center   ">
<div class="form-group col-md">
    <button class="btn btn-success" name="btnsubmit">Submit</button>
   <button class="btn btn-warning" name="btncancel">Reset</button>
</div>
</div>
</form>
 <?php include("design/last.php") ?>
</body>
</html>