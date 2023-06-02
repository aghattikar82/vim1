<?php  include("connection.php") ?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="#">V.I.M.</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">

      <li><a class="nav-link scrollto " href="index.php">Home</a></li>

        <li class="dropdown"><a href="#"><span>Staff</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a class="nav-link scrollto " href="feesmastersearch.php">Fees Master Search</a></li>
          <li><a class="nav-link scrollto " href="userstaffsearch.php">User Staff Search</a></li>
          <li><a class="nav-link scrollto " href="staffregsearch.php">Staff Registraion Search</a></li>

        </ul>
      
        <li class="dropdown"><a href="#"><span>Student</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
          
          <li><a class="nav-link scrollto " href="admsearch.php">Student Search</a></li>
          <li><a class="nav-link scrollto " href="studentlaevesearch.php">Student Leave Search</a></li>
          <li><a class="nav-link scrollto " href="enquiryformsearch.php">Enquiry form Search</a></li> 
          </ul>

          <li><a  href="index.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <br>
  <br>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
              <?php  include("msg.php") ?>
