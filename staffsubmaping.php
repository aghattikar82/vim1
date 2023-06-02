<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Satff Subject Maping</title>
   <script src="https://partner.googleadservices.com/gampad/cookie.js?domain=chat.klbg.in&amp;callback=_gfp_s_&amp;client=ca-pub-8351336891012076&amp;cookie=ID%3D2c9a6c3a6b33a381-22103f8e7ed500f2%3AT%3D1659896715%3ART%3D1659896715%3AS%3DALNI_MYV8VHbbBs81b6v4x3nzEUYessAFQ&amp;gpic=UID%3D00000861034c62c3%3AT%3D1659896715%3ART%3D1659896715%3AS%3DALNI_MZRyhgz1PVWIvLH-1iLKjlotl9HIw&amp;gpid_exp=1"></script>
   <script src="https://pagead2.googlesyndication.com/pagead/managed/js/adsense/m202208020101/show_ads_impl_fy2021.js?bust=31068774" id="google_shimpl"></script>
   <script data-ad-client="ca-pub-8351336891012076" async="" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" data-checked-head="true"></script>
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body align="center">
<h1>Staff Subject Maping</h1>
<form method="post" action="#" class="container" style="text-align: left;" autocomplete="of" align="center" >
   
<div class="row">
<div class="form-group col-md-6">
   <label for="name"><b>Course</b></label>
   <select name="course" required class="form-control">
  <option value="">Select Course</option>
  <option value="bca">BCA</option>
  <option value="bba">BBA</option>
  <option value="b.com">B.com</option>
</select>
</div>

   <div class="form-group col-md-6">
   
  
  <label for="sel1"> Select Subject </label>
  <select class="form-control" name="subname" required>
    <option>Select Subject</option>
    <?php
      try
      {
        $data=$con->query("select subid,subname from tblsubjectmaster ");
        while($row=mysqli_fetch_array($data))
        {
          ?>
            <option value="<?php echo  ucfirst($row["subid"])?>"><?php echo  ucfirst($row["subname"])?></option>   <?php 
        }
      }
      catch(Exception $exe){}
       ?>
    </select>
    </div>  



<div class="row">
<div  align="center">
<button class="btn btn-success" name="btnsubmit">Submit</button>
<button class="btn btn-warning" name="btnsubmit">Cancel</button>
</div>
</div>
</form>



</body>
</html
