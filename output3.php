<?php
require_once("connection.php");
$sql = "SELECT * FROM jobs LIMIT 27 OFFSET 55";
$result = $conn->query($sql);
if($result->num_rows > 0){
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Day Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/output.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:mayankshandilya1@gmail.com">mayankshandilya1@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +91 9739946347
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">Day</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php #hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php #about">About</a></li>
          <li><a class="nav-link scrollto" href="index.php #services">Services</a></li>
          <li><a class="nav-link scrollto" href="index.php #pricing">Pricing</a></li>
          <li><a class="nav-link scrollto" href="output1.php">Jobs</a></li>
          <li><a class="nav-link scrollto" href="index.php #contact">Contact</a></li>
          <li><a class="nav-link" data-bs-toggle="modal" data-bs-target="#signinModal" href="">Sign In</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<!-- modals section-->
<div id="signinModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="signinModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role = "document">

  <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header">
              <h5 class = "modal-title" id = "signinModalLabel"> Sign In</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="checklogin.php" method="post">
                  <div class = "form-group">
                      <label for="email">Email:</label>
                      <input type="email" name="email" id="email" class = "form-control" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class = "form-group">
                      <label for="pass">Password</label>
                      <input type="password" name="pass" id="pass" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <a class = "text-primary" data-bs-toggle="modal" data-bs-target="#signupModal" href="">Don't have an account? Sign Up</a>
                  </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">Close</button>
              <button type = "submit" class = "btn btn-primary" name ="submit">Sign In </button>
          </div>
</form>
      </div>
  </div>
</div>
<div id="signupModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role = "document">

  <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header">
              <h5 class = "modal-title" id = "signupModalLabel">Sign Up</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="add.php" method="post">
                  <div class = "form-group">
                      <label for="signupemail">Email:</label>
                      <input type="email" name="signupemail" id="signupemail" class = "form-control" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class = "form-group">
                      <label for="signuppass">Password</label>
                      <input type="password" name="signuppass" id="signuppass" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-check">
                      <input type="checkbox" name="check" id="check" class="form-check-input" id="exampleCheck1" required>
                      <label for="check" class="form-check-label"> I agree to the terms & conditions</label>
                  </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name ="submit">Sign Up </button>
          </div>
</form>
      </div>
  </div>
</div>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Jobs</li>
        </ol>
        <h2>All Jobs</h2>

      </div>
    </section><!-- End Breadcrumbs -->
<div class="container">
    <div class="row">
        <?php while($row = $result->fetch_assoc()){ ?>
        <div class="col-4 my-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="150">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-body d-flex flex-column">
                    <h4 class = "card-title"><?php echo "".$row['posts']."" ;?></h4>
                    <span class="text-primary">Company : <?php echo $row['companys'] ;?></span>
                    <span><i class='bx bxs-map' ></i><?php echo $row['location']; ?></span>
                    <span><i class='bx bxs-briefcase-alt-2'></i><?php echo $row['experience']; ?></span>
                    <p class = "card-text"><?php echo $row['description'];?></p>
                    <a class = "btn btn-outline-primary" href="<?php echo $row['links'];?>" role = "button" >Apply </a>
                </div>
            </div>
        </div>
        <?php } }?>
    </div>
    <div class="d-flex justify-content-end"><a href="output2.php" class = "btn btn-lg btn-primary" role = "button">< Previous</a>&nbsp&nbsp
    <a href="output4.php" class = "btn btn-lg btn-danger" role = "button"> Next ></a></div>
</div>
</main>
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Day</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +91 9739946347<br>
                <strong>Email:</strong> mayankshandilya1@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Day</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by Mayank Shandilya
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>