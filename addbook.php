<!DOCTYPE html>
<html>
<head>
  <?php include("design/head.php") ?>

 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Add Book</title>
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
<body>
  <?php include("design/msg.php"); ?>
  <?php include("design/librarymid.php") ?>

      <h1 align="center">Add Book</h1>
<form style="text-align: left;" class="container"  autocomplete="off" action="addbooksave.php"  method="post" role="form"  enctype="multipart/form-data">

<div class="row">
  <div class="form-group col-md-6">
    <label for="name"><b>Book Type</b></label>
   <select class="form-select form-control " name="booktype" id="booktype">
      <option value="">Select Book Type </option>
      <option value="book">Book</option>
      <option value="journal">journal</option>
      <option value="magazine">magazine</option>
    </select>
  </div>
  <div class="form-group col-md-6">
   <label for="name"><b>Book Name</b></label>
   <input type="text" class="form-control" placeholder="Enter Book Name" name="bookname" id="bookname" required>
</div>
</div>

<div class="row">
  <div class="form-group col-md-6">
   <label for="name"><b>Title</b></label>
   <input type="text" class="form-control" placeholder="Enter Title" name="title" id="title" required>
</div>

<div class="form-group col-md-6">
   <label for="name"><b>ISBN Number</b></label>
   <input type="number" class="form-control" placeholder="Enter ISBN Number" name="isbn_no" id="isbn_no" required>
</div>
</div>

<div class="row">
  <div class="form-group col-md-6">
   <label for="name"><b>Publisher</b></label>
   <input type="text" class="form-control" placeholder="Enter Publisher Name" name="publisher" id="publisher" required>
</div>

<div class="form-group col-md-6">
   <label for="name"><b>Author</b></label>
   <input type="text" class="form-control" placeholder="Enter Author Name" name="author" id="author" required>
</div>
</div>

<div class="row">
  <div class="form-group col-md-6">
   <label for="name"><b>Published Year</b></label>
   <input type="number" class="form-control" placeholder="Enter Published Year" name="published_yr" id="published_yr" required>
</div>

  <div class="form-group col-md-6">
   <label for="name"><b>Edition</b></label>
   <input type="text" class="form-control" placeholder="Enter Edition" name="edition" id="edition" required>
</div>
</div>

<div class="row">
  <div class="form-group col-md-6">
   <label for="name"><b>Publication Cost</b></label>
   <input type="text" class="form-control" placeholder="Enter Publication Cost" name="publication_cost" id="publication_cost" required>
</div>

  <div class="form-group col-md-6">
    <label for="name"><b>Publication Type</b></label>
   <select class="form-control" name=" " id="publication_type">
      <option value="">Select Publication Type </option>
      <option value="yearly">Yearly</option>
      <option value="monthly">Monthly</option>
      <option value="weekly">Weekly</option>
      <option value="biweekly">Biweekly</option>
    </select>
  </div>
</div>

<div class="row">
<div class="form-group col-md-12">
  <br/>
  <button class="form-control btn btn-success" name="btnaddbook">Add Book</button>
</div>
</div>
</form>

<?php


?>
<?php include("design/last.php") ?>
</body>
</html>