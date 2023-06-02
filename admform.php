<!DOCTYPE html>
<html>
<head>
</head>

 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Applicatin  Form</title>
   <script src="https://partner.googleadservices.com/gampad/cookie.js?domain=chat.klbg.in&amp;callback=_gfp_s_&amp;client=ca-pub-8351336891012076&amp;cookie=ID%3D2c9a6c3a6b33a381-22103f8e7ed500f2%3AT%3D1659896715%3ART%3D16598 96715%3AS%3DALNI_MYV8VHbbBs81b6v4x3nzEUYessAFQ&amp;gpic=UID%3D00000861034c62c3%3AT%3D1659896715%3ART%3D1659896715%3AS%3DALNI_MZRyhgz1PVWIvLH-1iLKjlotl9HIw&amp;gpid_exp=1"></script>
   <script src="https://pagead2.googlesyndication.com/pagead/managed/js/adsense/m202208020101/show_ads_impl_fy2021.js?bust=31068774" id="google_shimpl"></script>
   <script data-ad-client="ca-pub-8351336891012076" async="" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" data-checked-head="true"></script>
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>


</head>
<body>
    
    <h1 align="center">Application Form</h1>
<form style="text-align: left;" class="container"  autocomplete="off" action="admformsave.php"  method="post" role="form"  enctype="multipart/form-data">

<div class="row" >
   <div class="form-group col-md-6">
      <label for="photo">Upload Profile Photo of Student </label>
      <input onchange="loadFile(event)" class="form-control" accept="image/*" type="file" name="s_image" required id="s_image">
   </div>
   <div class="form-group col-md-6">
       <label for="" >Student Image</label><br>
       <img src="student/" id="output" align="center" style="height:150px;width:100px;" alt="your image">

</div>
</div>

<div class="row">
  <div class="form-group col-md-6">
    <label for="name"><b>Select Course</b></label>
   <select class="form-control" name="course" id="course">
      <option value="">Select Course </option>
      <option value="bba">BBA (Bachelor of Business Administration)</option>
      <option value="bca">BCA (Bachelor of Computer Application)</option>
      <option value="bcom" >B.com (Bachelor of Commerce) </option>
    </select>
  </div>
  <div class="form-group col-md-6">
   <label for="name"><b>Application No</b></label>
   <input type="number" class="form-control" placeholder="Enter Application No" name="aplno" id="aplno" required>
</div>
</div>

 <div class="row">
  <div class="form-group col-md-12">
   <label for="name"><b>Student Name </b></label>
    <input type="text" class="form-control" placeholder="Enter Student Name " name="sname"  id="sname"   autofocus="on" required>
</div>
</div>

<div class="row">
  <div class="form-group col-md-12">
   <label for="name"><b> Fathers Name </b></label>
    <input type="text" class="form-control" placeholder="Enter Fathers Name" name="fname" id="fname"  required>
</div>
</div>



<div class="row">
<div class="form-group col-md-12">
  <label for="name"><b>Mother  Name</b></label>
  <input type="text" class="form-control" placeholder="Enter Mother  Name" name="mname" id="mname"  required>
</div>
</div>


 <div class="row">
   <div class="form-group col-md-3">
    <label for="name"><b>Date of Birth</b></label>
    <input type="date" class="form-control"  name="dob" id="dob" required><br/>
</div> 
<div class="form-group col-md-3">
  <label for="name"><b>Blood Group</b></label>
  <input type="text" class="form-control" placeholder="Enter Blood Group" name="bloodgroup" id="bloodgroup" required>
</div>     
<div class="form-group col-md-3">
   <label for="name"><b>Religion</b></label>
   <input type="text" class="form-control" placeholder="Enter Religion" name="religion" id="religion" required><br/>
</div>
<div class="form-group col-md-3">
    <label for="name"><b>Category</b></label>
    <input type="text" class="form-control" placeholder="Enter Category" name="category" id="category" required>
</div>

</div>
<div class="row">
 <div class="form-group col-md-12">
   <label for="name"><b> Address for Correspondence</b></label>
   <input type="text" class="form-control" placeholder="Enter  Address for Correspondence" name="address" id="address"  rows="10" required><br/>
</div>
 
<div class="form-group col-md-6">
   <label for="name"><b> Pin Code</b></label>
   <input type="number" class="form-control" placeholder="Enter Pin Code" name="pincode" id="pincode" required>
</div>

<div class="form-group col-md-6">
   <label for="name"><b>Parent's Mobile No</b></label>
   <input type="number" class="form-control" placeholder="Enter Parent's Mobile No" name="p_mobile_no" id="p_mobile_no" required>
</div>

</div>
<div class="row">
 <div class="form-group col-md-6">
   <label for="name"><b>Permanent Address </b></label>
   <input type="text" class="form-control" placeholder="Enter Permanent Address " name="paddress" id="paddress" rows="10" required><br/>
</div>

<div class="form-group col-md-6">
   <label for="name"><b>Pin Code</b></label>
   <input type="number" class="form-control" placeholder="Enter Permanent Address< " name="pin_code" id="pin_code" required>
</div>

</div>
<div class="row">
<div class="form-group col-md-6">
   <label for="name"><b>Student's Mobile No</b></label>
   <input type="number" class="form-control" placeholder="Enter Student's Mobile No" name="s_mobile_no" id="s_mobile_no" required>
</div>

<div class="form-group col-md-6">
   <label for="name"><b>E-mail</b></label>
   <input type="email" class="form-control" placeholder="Enter E-mail" name="semail" id="semail" required><br/>
  </div>
</div>
  
  <div class="row" >
   <div class="form-group col-md-3">
        <label for="name"><b>Choice of II language</b></label> </div>
    <div class="form-group col-md-3">
        <input type="checkbox" id="kannada" name="language" value="course" >
              <label for="kannada">Kannada</label><br>
           </div>
           <div class="form-group col-md-3">
        <input type="checkbox" id="hind" name="language" value="course" >
              <label for="hini">Hindi</label><br>
           </div>
           <div class="form-group col-md-3">
        <input type="checkbox" id="others" name="language" value="course" >
              <label for="others">Others</label><br>
           </div>
</div>
<div class="row">
<div class="form-group col-md-6">
   <label for="name"><b>SSLC Register  No</b></label>
   <input type="text" class="form-control" placeholder="Enter SSLC Register  No " name="sslc_reg_no" id="sslc_reg_no" required>
</div>

<div class="form-group col-md-6">
   <label for="name"><b>Income Caste-RD Number</b></label>
   <input type="text" class="form-control" placeholder="Enter Income Caste-RD Number" name="income_caste_no" id="income_caste_no" required><br/>
  </div>
</div>
<div class="row">
<div class="form-group col-md-6">
   <label for="name"><b> 371(J) RD Number</b></label>
   <input type="text" class="form-control" placeholder="Enter 371(J) RD Number " name="three_seven_one_j" id="three_seven_one_j" required>
</div>

<div class="form-group col-md-6">
   <label for="name"><b>Adhar Number</b></label>
   <input type="text" class="form-control" placeholder="Enter Adhar Number " name="adhar_no" id="adhar_no" required><br/>
  </div>
</div>
<div class="row">

  <label for="heading">&nbsp&nbsp&nbsp<u>Bank Details </u></label><br><br>
  
<div class="form-group col-md-4">
   <label for="name"><b>Account Number</b></label>
   <input type="text" class="form-control" placeholder="Enter Account Number" name="acno" id="acno" required>
</div>

<div class="form-group col-md-4">
   <label for="name"><b>IFSC Code</b></label>
   <input type="text" class="form-control" placeholder="Enter IFSC Code" name="ifsc_code" id="ifsc_code" required><br/>
</div>
<div class="form-group col-md-4">
   <label for="name"><b> Branch </b></label>
    
   <input type="text" class="form-control" placeholder="Enter Branch Name" name="branch" id="branch" required><br/> </div></div> 
<div class="row">
    <label for="heading">&nbsp&nbsp&nbsp<u>Documents </u></label><br><br>
  
    <div class="form-group col-md-4">
 <label for="photo">Upload Stamp Size Photo</label>
      <input onchange="loadFile(event)" class="form-control" accept="image/*" type="file" name="stamp_size_image" required="" id="stamp_size_image">
    <img src="stampsizephoto/" id="output" align="center" style="height:150px;width:100px;" alt="your image">

</div>
    <div class="form-group col-md-4">
        <label for="pumarkscard">Upload PU Marks Card </label>
        <input onchange="loadFile(event)" class="form-control" accept="image/*" type="file" name="pu_image" required="" id="pu_image">
       <img src="pumarkscard/" id="output" align="center" style="height:150px;width:100px;" alt="your image">


    </div>
<div class="form-group col-md-4">
   <label for="photo">Upload Previous School TC</label>
      <input onchange="loadFile(event)" class="form-control" accept="image/*" type="file" name="tc_image" required="" id="tc_image">
  <img src="transfercertificate/" id="output" align="center" style="height:150px;width:100px;" alt="your image">


</div>     


</div>







<div class="row">
<div class="form-group col-md-12">
  <br/>
  <button class="btn btn-success" name="btnsubmit"  >Submit</button>
</div>
</div>
</form>

</body>
</html>