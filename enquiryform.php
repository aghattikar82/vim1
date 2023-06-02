<!DOCTYPE html>
<html>
<head>
	<title>Enquiry Form</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1 align="center">Enquiry Form</h1>
	<hr>
	<form  method="post" action="enquiryformsave.php" class="container" enctype="multipart/form-data" style="text-align: left;">

		<div class="row" align="center">
			<div class="form-group col-md-3">
				<label for="name"><b>Course</b></label><br> </div>
				
    <div class="form-group col-md-3">
				<input type="checkbox" id="course" name="course" value="course" checked="">
              <label for="bca">BCA</label><br>
        </div>
           <div class="form-group col-md-3">
				<input type="checkbox" id="course" name="course" value="course" >
              <label for="bba">BBA</label><br>
           </div>
           <div class="form-group col-md-3">
				<input type="checkbox" id="course" name="course" value="course" >
              <label for="b.com">B.Com</label><br>
           </div>
       </div>


          <div class="row">
			<div class="form-group col-md-6">
				<label for="fname">Full Name</label><br>
				<input autofocus="on" type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter Full Name" maxlength="100"><br>
			</div>
		    <div class="form-group col-md-6">
		    	<label for="dob">Date Of Birth</label><br>
		    	<input type="Date" name="dob" id="dob" class="form-control" placeholder="Enter Date of Birth">
		    </div>
		  </div>
		  <div class="row">
		    <div class="form-group col-md-6">
				<label for="Category">Category</label><br>
				<input type="text" name="category" id="category" class="form-control" placeholder="Enter Category">
			</div>
			<div class="form-group col-md-6">
				<label for="native">Native Of</label><br>
				<input type="text" name="native" id="native" class="form-control" placeholder="Enter Native">
			</div>
		</div>

         <div class="row">
			<div class="form-group col-md-6">
				<label for="faddress"> Full Address</label><br>
			<textarea name="address" id="address" class="form-control" placeholder="Enter Full Address" maxlength="30"></textarea>
			</div>
			<div class="form-group col-md-6">
				<label for="snumber">Student Number</label><br>
				<input type="number"  class="form-control "name="snumber" id="snumber" placeholder="Enter Student Number" min="6300000000" maxlength="12" max="9999999999" >
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-6">
				<label for="pnumber">Parent Number</label><br>
				<input type="number" name="pnumber" id="pnumber" class="form-control" placeholder="Enter Parent Number" class="form-control" min="6300000000"  max="9999999999" >
			</div>
			<div class="form-group col-md-6">
				<label for="stream">Stream : Science/Arts/Commerce/Vocational</label><br>
				<input type="text" name="stream" id="stream" class="form-control" placeholder="Enter Stream">
			</div>
		</div>
			<div class="row">
			<div class="form-group col-md-6">
				<label for="moi"> Medium Of Instruction (In SSLC)</label><br>
				<input type="text" name="moinstruction" id="moinstruction" class="form-control" placeholder="Enter Medium (In SSLC)">
			</div>
			<div class="form-group col-md-6">
				<label for="puc">(In PUC/Equivalent)</label><br>
				<input type="text" name="puc" id="puc" class="form-control" placeholder="Enter In PUC/Equivalent">
			</div>
		</div>
			<div class="row">
			<div class="form-group col-md-6">
				<label for="mt"> Marks Scored: In PUC Equivaent(%)</label><br>
				<input type="text" name="marksscored" id="marksscored" class="form-control" placeholder="Enter In (%)">
			</div>
			<div class="form-group col-md-6">
				<label for="rnumber"> In SSLC(%)</label><br>
				<input type="text" name="sslc" id="sslc" placeholder="Enter In (%)" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-6">
				<label for="pr">Presently Residing At</label><br>
				<input type="text" name="presiding" id="presiding" class="form-control" placeholder="Enter Presently Residing">
			</div>
			<div class="form-group col-md-6">
				<label for="aboutcollege">How You Come To Know About The College</label><br>
				<input type="text" name="aboutcollege" id="aboutcollege" placeholder="Enter Reference" class="form-control">
			</div>
		</div>
		<hr>	
		<div class="row">
			<div class="form-group col-md-6">
				<label for="fn">Father   Name</label><br>
				<input type="text" name="fname" id="fname" class="form-control" placeholder="Enter Father Name">
			</div>
			<div class="form-group col-md-6">
				<label for="fatherage">Father Age</label><br>
				<input type="number" name="fatherage" id="fatherage" placeholder="Enter Reference" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-6">
				<label for="fq">Father Qualification</label><br>
				<input type="text" name="fqualification" id="fqualification" class="form-control" placeholder="Enter Father Qualification">
			</div>
			<div class="form-group col-md-6">
				<label for="fo">Father Occupation</label><br>
				<input type="text" name="foccupation" id="foccupation" placeholder="Enter Father Occupation" class="form-control">
			</div>
		</div>
		<hr>	
		<div class="row">
			<div class="form-group col-md-6">
				<label for="fn">Mother   Name</label><br>
				<input type="text" name="mname" id="mname" class="form-control" placeholder="Enter Mother Name">
			</div>
			<div class="form-group col-md-6">
				<label for="motherage">Mother Age</label><br>
				<input type="number" name="motherage" id="motherage" placeholder="Enter Mother Age" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-6">
				<label for="fq">Mother Qualification</label><br>
				<input type="text" name="mqualification" id="mqualification" class="form-control" placeholder="Enter Mother Qualification">
			</div>
			<div class="form-group col-md-6">
				<label for="fo">Mother Occupation</label><br>
				<input type="text" name="moccupation" id="moccupation" placeholder="Enter Mother Occupation" class="form-control">
			</div>
		</div>
		<hr>	
		<div class="row">
			<div class="form-group col-md-6">
				<label for="afi">Average Family Income Per Annum</label><br>
				<input type="number" name="afincome" id="afincome" class="form-control" placeholder="Enter Average Family Income Per Annum">
			</div>
			<div class="form-group col-md-6">
				<label for="ed">Enquiry Date</label><br>
				<input type="Date" name="edate" id="edate" placeholder="Enter Enquiry Date" class="form-control">
			</div>
		</div><br>
		<div class="row" >
			<div class="form-group col-md-12">
				<button type="submit" class="form-control btn btn-success" name="Register" id="Register" value="Register">Register</button>
			</div>
		</div>



			
	 </div>
		



	</form>


	
</body>
</html>