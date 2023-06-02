<!DOCTYPE html>
<html>
<head>
   <?php include("design/head.php") ?>
	
	<title>Registration Form</title>    
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
</head>
<body>
<?php include("design/staffmid.php") ?>
    <h1 align="center">Staff Registration Form</h1>
<form class="container" autocomplete="off" action="staffregformsave.php" method="post" role="form">

<div class="form-group col-m d-12">
   <label for="name"><b>Name</b></label>
    <input type="text" class="form-control" name="name"  autofocus="on" id="name" required placeholder="Enter Name">
</div>


<div class="form-group">
   <label for=""><b>Designation</b></label>
   <select name="designation" id="designation" required class="form-control">
  <option value="">Select Designation</option>
  <option value="4">Teaching Staff</option>
  <option value="5">Librarian</option>
  <option value="6">Accountant</option>
  <option value="2">Principal</option>
  <option value="3">HOD</option>
  <option value="1">Management</option>
   </select>
<br/>
</div>

<div class="form-group">
  <label for="name"><b>Education</b></label>
  <input type="text" class="form-control" name="education" id="education" required placeholder="Enter Educaton">
</div>

<div class="form-group">
   <label for=""><b>Work Experience</b></label>
<select name="workexperience" id="workexperience" required class="form-control">
<option value="">Select Years</option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20+years">20+Years</option>
   </select>
</div>

    <div class="form-group">
   <label for="mobilenumber"><b>Mobile Number</b></label>
    <input type="number" class="form-control" name="mobilenumber" id="mobilenumber"  placeholder="Enter Mobile Number" required>
</div>

<div class="form-group">
   <label for="password"><b>Password</b></label>
    <input type="password" class="form-control" name="password" id="password"  placeholder="Enter Password " required>
</div>


<div class="form-group">
   <label for="emailid"><b>Email Id</b></label>
   <input type="Email" class="form-control" name="emailid" id="emailid" required placeholder="Enter Email Id"><br/>
</div>
<div class="row" align="center">
<div class="form-group col-md-12">

  <button class="btn btn-success" name="btnsubmit">Register</button>
</div>
</div>


</form>
<?php include("design/last.php") ?>
</body>
</html>