      <?php  include("connection.php") ?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="#">V.I.M.</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
        <li><a class="nav-link scrollto " href="issuebook.php">Issue </a></li>
      <li><a class="nav-link scrollto " href="returnbook.php">Return </a></li>
      <li><a class="nav-link scrollto " href="addbook.php">Add New Book</a></li>
      <li><a class="nav-link scrollto " href="generatelibcard.php">Issue Library Card </a></li>
        
      <li class="dropdown"><a href="#"><span>Reports</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a class="nav-link scrollto " href="issuedbookdisplay.php">Issued Books</a></li>
          <li><a class="nav-link scrollto " href="returnbookdisplay.php">Returned Books </a></li>
          <li><a class="nav-link scrollto " href="returnbookstatus.php">Return Status of Book</a></li>

        </ul></li>
     
        
          
          </li>
          <li><a  href="index.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

      <?php  include("msg.php") ?>
