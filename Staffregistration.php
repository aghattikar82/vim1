<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Admission Form</title>
   <script src="https://partner.googleadservices.com/gampad/cookie.js?domain=chat.klbg.in&amp;callback=_gfp_s_&amp;client=ca-pub-8351336891012076&amp;cookie=ID%3D2c9a6c3a6b33a381-22103f8e7ed500f2%3AT%3D1659896715%3ART%3D1659896715%3AS%3DALNI_MYV8VHbbBs81b6v4x3nzEUYessAFQ&amp;gpic=UID%3D00000861034c62c3%3AT%3D1659896715%3ART%3D1659896715%3AS%3DALNI_MZRyhgz1PVWIvLH-1iLKjlotl9HIw&amp;gpid_exp=1"></script>
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


	<title>Staff Registration</title>
</head>
<body>
	 <h1 align="center">Staff Registration</h1>
<form style="text-align: left;" class="container"  autocomplete="off" action="admformsave.php"  method="post" role="form"  enctype="multipart/form-data">

 <div class="row">
  <div class="form-group col-md-12">
   <label for="name"><b>Name</b></label>
    <input type="text" class="form-control" name="name" placeholder="Enter Name" id="name"  autofocus="on" required>
</div>
</div>

 <div class="row">
  <div class="form-group col-md-12">
   <label for="name"><b>Destination</b></label>
    <select class="form-control" name="destination" id="destination">
    	<option>Select Destination</option>
    	<option>Teaching Staff</option>
    	<option>HOD</option>
    	<option>Librarian</option>
    	<option>Accountant</option>
    	<option>Principal</option>
    	<option>Management</option>
    	
    </select>
</div>
</div>

<div class="row">
  <div class="form-group col-md-12">
   <label for="name"><b>Education</b></label>
    <input type="text" class="form-control" name="education" placeholder="Enter Education" id="education"  autofocus="on" required>
</div>
</div>

 <div class="row">
  <div class="form-group col-md-12">
   <label for="name"><b>Work Experience</b></label>
    <select class="form-control" name="workexperience" id="workexperience">
    	<option>Select</option>
    	<option>1</option>
    	<option>2</option>
    	<option>3</option>
    	<option>4</option>
    	<option>5</option>
    	<option>6</option>
    	<option>7</option>
    	<option>8</option>
    	<option>9</option>
    	<option>10</option>
    	<option>11</option>
    	<option>12</option>
    	<option>13</option>
    	<option>14</option>
    	<option>15</option>
    	<option>16</option>
    	<option>17</option>
    	<option>18</option>
    	<option>19</option>
    	<option>20</option>

    	
    </select>
</div>
</div>

<div class="row">
<div class="form-group col-md-12">
   <label for="name"><b>Phone No</b></label>
   <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number" required>
</div>
</div>

<div class="row">
<div class="form-group col-md-12">
   <label for="name"><b>Password</b></label>
   <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>
</div>
</div>

<div class="row">
<div class="form-group col-md-12">
   <label for="name"><b>E-mail</b></label>
   <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email ID" required><br/>
  </div>
</div>






</body>
</html>