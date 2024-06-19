
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
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <?php
include "connect.php";
$prenom = $_POST["prenom"];
$nom = $_POST["nom"];
$email = $_POST["email"];
$inst = $_POST["inst"];
$tel = $_POST["tel"];
$class = $_POST["class"];
$exp = $_POST["exp"];
$lang = $_POST["lang"];

$verif = "select * from toutcomptes WHERE email='$email'";
$reqVerif = $db->query($verif);
  $rs = $reqVerif->fetchAll();
  $deja =false;
$meme_formation = "select * from participants WHERE email='$email' AND formation ='$lang' ;";
          $req_meme = $db->query($meme_formation);
          $rsMeme = $req_meme->fetchAll();
          if($rsMeme) {$deja =true;}
if (!$rs) 
{
      $sql = "insert into toutcomptes values('$prenom','$nom','$email','$inst','$tel');";
      $db->query($sql);
      $sql2 = "INSERT INTO `participants` (`prenom`, `nom`, `email`, `institut`, `classe`, `tel`, `exp`, `formation`) 
      VALUES ('$prenom', '$nom', '$email', '$inst', '$class', '$tel', '$exp', '$lang');";
       $db->query($sql2);
    
      
} else 
{
  $sql = "INSERT INTO `participants` (`prenom`, `nom`, `email`, `institut`, `classe`, `tel`, `exp`, `formation`) 
  VALUES ('$prenom', '$nom', '$email', '$inst', '$class', '$tel', '$exp', '$lang');";
  $db->query($sql);
  
}


?>
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <?php
          if ($deja)
          echo "<h1>You are already registered using this email.</h1>";
          else {
            echo "<h1>Registered successfully.</h1>
            <h2>You will be the new Leader of <span>";
            if ($_POST["lang"] == "php_laravel")
              echo "<font color='red'>LARAVEL</font> ";
            if ($_POST["lang"] == "html_css")
              echo "<font color='darkorange'>HTML</font> & <font color='blue'>CSS</font>";
            if ($_POST["lang"] == "js")
              echo "<font color='yellow'>JavaScript</font>";
            if ($_POST["lang"] == "poo")
              echo "<font color='darkorange'>JAVA</font> & <font color='purple'>C#</font>";


          }
            ?>
           </h2>
            <h2>We will contact you soon to give you all details about our course</h2>
            <div><a href="index.html" class="btn-get-started scrollto">Got it</a></div>
          </div>
          <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <!-- CONDITION HERE -->  
          <?php
          if ($_POST["lang"] == "php_laravel")
              echo '<img src="assets/img/laravel.png" class="img-fluid animated" alt="">
          ';
          if ($_POST["lang"] == "html_css")
          echo '<img src="assets/img/html_css.png" class="img-fluid animated" alt="">
          ';     
          if ($_POST["lang"] == "js")
          echo '<img src="assets/img/js.png" class="img-fluid animated" style="border-radius:20px"alt="">
          ';  
          if ($_POST["lang"] == "poo")
          echo '<img src="assets/img/oop.png" class="img-fluid animated" style="border-radius:20px"alt="">
          ';            
          ?>
          <!-- CONDITION END -->  

          </div>
        </div>
      </div>

  </section><!-- End Hero -->

  
       
    
     
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

