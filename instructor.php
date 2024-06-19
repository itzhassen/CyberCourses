<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start();
    $formation = $_SESSION["formation"]; ?>
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
  <script language="javascript">
    function details()
    {
document.getElementById("affichage").style="display:none";
document.getElementById("affichage2").style="display:block";

    }
    function js()
    {
      document.getElementById("affichage2").style="display:none";
document.getElementById("affichage").style="display:block";
    }
    </script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">CyberCourses</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li class="dropdown"><a href="#"><span>Tools</span> <i class="bi bi-chevron-down"></i></a>
         
            <ul>
            <li><a href="#main" onclick="details();">Course Details</a></li>    
              <li><a href="#main" onclick="js();">Course participants</a></li>        
              
            </ul>
            
          </li>
          <li><a class="getstarted scrollto" href="index.html">Return to main page</a></li>
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
            <h1>Welcome <?php echo $_SESSION["civ"] . " " . $_SESSION["prenom"] . " " . $_SESSION["nom"]; ?>.</h1>
            <h2>Here you can find all the tools to manage your courses.</h2>
          </div>
          <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
         <?php if ($_SESSION["civ"]=="Mme.") { ?>
          <img src="assets/img/female_inst.png" class="img-fluid animated" alt="" width="80%">
          <?php } else { ?> 
          <img src="assets/img/male_inst.png" class="img-fluid animated" alt="" width="80%">
          <?php } ?>

          </div>
        </div>
      </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
        <center>
       
        <section id="contact" class="contact section-bg">
           
            <div id="affichage" class="container" data-aos="fade-up" style="display:block">
            <!------------------------------------------------------------------------ -->
            <?php
            include "connect.php";
            $sql = "SELECT prenom,nom,email,institut,classe,tel,exp FROM participants WHERE resultat='Accepted' AND formation='$formation' ";
            $req = $db->query($sql);
            $rs = $req->fetchAll();
           /* switch ($formation)
            {
              case "html_css": echo ' <h3>List of all participants in HTML & CSS courses </h3>';
              case "js": echo ' <h3>List of all participants in JavaScript courses </h3>';
              case "php_laravel": echo ' <h3>List of all participants in PHP & Laravel courses </h3>';
              case "poo": echo ' <h3>List of all participants in JAVA & C# courses </h3>';
            } */
            if ($formation=="html_css")echo ' <h3>List of Accepted participants in HTML & CSS courses </h3>';
            if ($formation=="js")echo ' <h3>List of Accepted participants in JavaScript courses </h3>';
            if ($formation=="php_laravel")echo ' <h3>List of Accepted participants in PHP & Laravel courses </h3>';
            if ($formation=="poo")echo '  <h3>List of Accepted participants in JAVA & C# courses </h3>';
            echo '<br><table width="100%" border="1"><tr><th>Prenom</th><th>Nom</th><th>Email</th><th>Institut</th><th>Classe</th><th>Tel</th><th>Experience</th></tr>';
            for ($i=0; $i<$req->rowCount(); $i++)
            {
                echo "<tr>";
                for ($j=0; $j<$req->columnCount(); $j++)
                {
                    echo "<td>" . $rs[$i][$j] . "</td>";
                }
                echo "</tr>";
            }
            echo '</table>';
            ?>

            <!------------------------------------------------------------------------ -->
            </div>
            <div id="affichage2" class="container" data-aos="fade-up" style="display:none;" >
            <!------------------------------------------------------------------------ -->
            <?php
            include "connect.php";
            $sql = "SELECT libelle,goals,date_debut,date_fin,COUNT(*) FROM formation f,participants p WHERE p.formation=f.code AND resultat='Accepted' AND formation='$formation' ;";
            $req = $db->query($sql);
            $rs = $req->fetchAll();
           
            if ($formation=="html_css")echo ' <h3>Details of HTML & CSS Courses</h3>';
            if ($formation=="js")echo ' <h3>Details of JavaScript Courses</h3>';
            if ($formation=="php_laravel")echo '<h3>Details of PHP & Laravel Courses</h3>';
            if ($formation=="poo")echo '<h3>Details of Java & C# Courses</h3>';
            echo '<br><table width="100%" border="1" align="center"><tr align="center"><th align="center" >Libelle</th><th align="center" width="50%">Goals</th><th align="center">Date Debut</th><th align="center">Date Fin</th><th align="center" >Nombre des Participants</th></tr>';
            for ($i=0; $i<$req->rowCount(); $i++)
            {
                echo "<tr align='center'>";
                for ($j=0; $j<$req->columnCount(); $j++)
                {
                    echo "<td align='center'>" . $rs[$i][$j] . "</td>";
                }
                echo "</tr>";
            }
            echo '</table><br><br>';
            //DAYS COUNTDOWN
            $date_formation = $rs[0][3];
            $date = strtotime("$date_formation");
            $remaining = $date - time();
            $days_remaining = floor($remaining / 86400);
            $hours_remaining = floor(($remaining % 86400) / 3600);
    
echo "<h3>There are <font color='red'> $days_remaining </font> days and <font color='blue'> $hours_remaining </font>hours left before Starting Courses</h3>";
            ?>

            <!------------------------------------------------------------------------ -->
            </div>

        </section>
     
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