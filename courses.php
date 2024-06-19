<?php
$lang = $_GET["c"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CyberCourses</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/gazala.png" rel="icon">
  <!--<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body onload="hide();">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">CyberCourses</a></h1>
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li class="dropdown"><a href="#"><span>Our Courses</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="courses.php ?c=html_css">HTML & CSS</a></li>
              <li><a href="courses.php ?c=js">JavaScript</a></li>
              <li><a href="courses.php ?c=php_laravel">Laravel & PHP</a></li>
              <li><a href="courses.php ?c=poo">C# & JAVA</a></li>
            </ul>
          </li>
          <li><a class="getstarted scrollto" href="#contact">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1>The best place to improve your digital skills.</h1>
            <h2>We are team of talented developers & engineers who are going to help you reach your goal.</h2>
            <div><a href="#contact" class="btn-get-started scrollto">Get Started</a></div>
          </div>
          <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
        <center>
       
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">
                <!-- CONDITION HERE-->
                <?php
                  if ($lang == "html_css")
                  {
                  echo '<div  data-aos="zoom-in" data-aos-delay="150">
                    <img src="assets/img/html_css.png" class="img-fluid animated" alt="HTML_CSS" style="width: 200px;">
                </div>';
                  } 
                  if ($lang == "js")
                  {
                  echo '<div  data-aos="zoom-in" data-aos-delay="150">
                    <img src="assets/img/js.png" class="img-fluid animated" alt="JS" style="width: 200px;">
                </div>';
                  } 
                  if ($lang == "php_laravel")
                  {
                  echo '<div  data-aos="zoom-in" data-aos-delay="150">
                    <img src="assets/img/laravel.png" class="img-fluid animated" alt="HTML_CSS" style="width: 200px;">
                </div>';
                  } 
                  if ($lang == "poo")
                  {
                  echo '<div  data-aos="zoom-in" data-aos-delay="150">
                    <img src="assets/img/oop.png" class="img-fluid animated" alt="C#_JAVA" style="width: 350px;">
                </div>';
                  } 
                 ?>
                
                <!-- END CONDITION --> <br><br>
        <div class="col-lg-6">
            <form action="register.php" method="post" role="form" >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="prenom" class="form-control" id="prenom" placeholder="First Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="nom" id="nom" placeholder="Last Name" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div><br>
              <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="inst" class="form-control" id="Institute" placeholder="Your Institute" required>
              </div>
              
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="class" id="class" placeholder="Your Class" required>
              </div>
              </div>  
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="tel" id="phone" placeholder="Phone Number" required>
              </div> 

              <br>
              <!-- CONDITION HERE -->
              <?php 
                 if ($lang=="html_css")
                 {
                echo "Do you have experience in HTML & CSS ?";
                 }
                 if ($lang=="js")
                 {
                echo "Do you have experience in JavaScript ?";
                 }
                 if ($lang=="php_laravel")
                 {
                echo "Do you have experience in PHP / Laravel ?";
                 }
                 if ($lang=="poo")
                 {
                echo "Do you have experience in Oriented Object Programming ( JAVA / C# ) ?";
                 }

              
              ?>
                
                <!-- END CONDITION -->
                <br>
                <input type="radio" name="exp" id="yes" onclick="hide();"> Yes <br>
                <input type="radio" name="exp" onclick="hide();" id="no" checked="checked"> No
                
                <!-- CONDITION HERE -->
                
              <div class="form-group mt-3">
              <?php 
                 if ($lang=="html_css")
                {
echo '<textarea id="experience" class="form-control" name="exp" rows="5" default="" placeholder="Tell us about your knowledge about HTML & CSS"  style=""></textarea>';
                }
                else
                if ($lang=="js")
                {
echo '<textarea id="experience" class="form-control" name="exp" rows="5" default="" placeholder="Tell us about your knowledge about JavaScript"  style=""></textarea>';
                }
                if ($lang=="php_laravel")
                {
echo '<textarea id="experience" class="form-control" name="exp" rows="5" default="" placeholder="Tell us about your knowledge about PHP / Laravel "  style=""></textarea>';
                }
                if ($lang=="poo")
                {
echo '<textarea id="experience" class="form-control" name="exp" rows="5" default="" placeholder="Tell us about your knowledge about Java / C#"  style=""></textarea>';
                }
                ?>
              </div><br>
              <!-- END CONDITION -->
              <div class="text-center"><button type="submit">Register</button></div>
              <?php echo "<input type='text' value='$lang' name='lang' style='visibility:hidden'>"; ?>
            </form>
          </div>
          </div></section>
    </center>
    <script language="javascript">
        function hide()
        {
        if (document.getElementById("no").checked==true)
        {
            document.getElementById("experience").style="visibility: hidden;";
        }  
        if (document.getElementById("yes").checked==true)
        {
            document.getElementById("experience").style="visibility: visible;";
        }
       
        }

    </script>
     
    <!-- End About Section -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span>CyberParc</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            
            Developed by <a href="https://www.linkedin.com/in/hassen-ben-daadouch-9bb54222b?originalSubdomain=tn">Hassen Ben Daadouch</a>
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="facebook.com/hassendaadouch" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="instagram.com/itzhassen" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/in/hassen-ben-daadouch-9bb54222b?originalSubdomain=tn" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
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