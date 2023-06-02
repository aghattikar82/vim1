<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Subject Master</title>
         <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



</head>
<body>

    <h1 align="center">Subject Master</h1>
<form style="text-align: left;" class="container"  autocomplete="off" action="studentleavesave.php"  method="post" role="form"  >


  

 <div class="form-group col-md-12">
   <label for="name"><b>Subject Name </b></label>
    <input type="text" class="form-control" autofocus="on"  placeholder="Enter Subject Name " name="subname"  id="subname"  required>   
</div>


  <div class="form-group col-md-12">
    <label for="name"><b>Select Semester</b></label>
   <select class="form-control" name="semester" id="semester">
      <option value="">Select Course </option>
      <option value="I"> I Sem </option>
      <option value="II"> II Sem </option>
      <option value="III"> III Sem </option>
      <option value="IV"> IV Sem </option>
      <option value="V"> V Sem </option>
      <option value="IV"> VI Sem </option>
    </select>
  </div>

  <div class="form-group col-md-12">
    <label for="name"><b>Select Course</b></label>
   <select class="form-control" name="course" id="course">
      <option value="">Select Course </option>
      <option value="bba">BBA (Bachelor of Business Administration)</option>
      <option value="bca">BCA (Bachelor of Computer Application)</option>
      <option value="bcom" >B.com (Bachelor of Commerce) </option>
    </select>
  </div>

<div class="form-group col-md" align="center">

  <button class=" btn btn-success" name="btnsubmit"  >Submit</button>

  <button class=" btn btn-danger" name="btnsubmit"  >cancel</button>
</div>
</form>

<?php


?>
</body>
</html>