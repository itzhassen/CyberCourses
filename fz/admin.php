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
  <?php session_start(); ?>
  <script language="javascript">
     function allPart()
    {
     document.getElementById("allPart").style="display:block";
     document.getElementById("html").style="display:none"; 
     document.getElementById("instructors").style="display:none"; 
     document.getElementById("js").style="display:none";  
     document.getElementById("php").style="display:none"; 
     document.getElementById("poo").style="display:none"; 
     document.getElementById("ajout").style="display:none"; 
    }
    function instructors()
    {
      document.getElementById("allPart").style="display:none";
     document.getElementById("html").style="display:none"; 
     document.getElementById("instructors").style="display:block"; 
     document.getElementById("js").style="display:none";  
     document.getElementById("php").style="display:none"; 
     document.getElementById("poo").style="display:none"; 
     document.getElementById("ajout").style="display:none"; 
    }
    function js()
    {
      document.getElementById("allPart").style="display:none";
     document.getElementById("html").style="display:none"; 
     document.getElementById("instructors").style="display:none"; 
     document.getElementById("js").style="display:block";  
     document.getElementById("php").style="display:none"; 
     document.getElementById("poo").style="display:none"; 
     document.getElementById("ajout").style="display:none"; 
   }
    function php()
    {
      document.getElementById("allPart").style="display:none";
     document.getElementById("html").style="display:none"; 
     document.getElementById("instructors").style="display:none"; 
     document.getElementById("js").style="display:none";  
     document.getElementById("php").style="display:block"; 
     document.getElementById("poo").style="display:none"; 
     document.getElementById("ajout").style="display:none"; 
     }
    function html()
    {
      document.getElementById("allPart").style="display:none";
     document.getElementById("html").style="display:block"; 
     document.getElementById("instructors").style="display:none"; 
     document.getElementById("js").style="display:none";  
     document.getElementById("php").style="display:none"; 
     document.getElementById("poo").style="display:none"; 
     document.getElementById("ajout").style="display:none"; 
    }
    function poo()
    {
      document.getElementById("allPart").style="display:none";
     document.getElementById("html").style="display:none"; 
     document.getElementById("instructors").style="display:none"; 
     document.getElementById("js").style="display:none";  
     document.getElementById("php").style="display:none"; 
     document.getElementById("poo").style="display:block"; 
     document.getElementById("ajout").style="display:none"; 
    }
    function ajout()
    {
      document.getElementById("allPart").style="display:none";
     document.getElementById("html").style="display:none"; 
     document.getElementById("instructors").style="display:none"; 
     document.getElementById("js").style="display:none";  
     document.getElementById("php").style="display:none"; 
     document.getElementById("poo").style="display:none"; 
     document.getElementById("ajout").style="display:block"; 
    }

  
   
    </script>
</head>

<body onload="allPart()">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">CyberCourses</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li class="dropdown"><a href="#"><span>Tools</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#main" onclick="allPart();">List of all Participants</a></li>
              <li><a href="#main" onclick="instructors();">List of Instructors</a></li>
              <li><a href="#main" onclick="js();">Javascript course participants</a></li>
              <li><a href="#main" onclick="php();">PHP & Laravel course participants</a></li>
              <li><a href="#main" onclick="html();">HTML course participants</a></li>
              <li><a href="#main" onclick="poo();">C# & Java course participants</a></li>
              <li><a href="#main" onclick="ajout();">Add an Instructor</a></li>


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
            <h1>Welcome Admin.</h1>
            <h2>Here you can find all the tools to manage the courses.</h2>
          </div>
          <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
            <img src="assets/img/admin.png" class="img-fluid animated" alt="" width="80%">
          </div>
        </div>
      </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
        <center>
       
        <section id="contact" class="contact section-bg">
           
            <div id="allPart" class="container" data-aos="fade-up" >     
            <h3>List of all participants in our courses </h3><br><table width="100%" border="1"><tr><th>Prenom</th><th>Nom</th><th>Email</th><th>Institut</th><th>Numero</th><th></th></tr></tr><?php include "connect.php";$affichage_js = "SELECT * FROM toutComptes ";$req = $db->query($affichage_js);$rs = $req->fetchAll();for ($i=0; $i<$req->rowCount(); $i++){echo "<tr>";for ($j=0; $j<$req->columnCount(); $j++){echo "<td>" . $rs[$i][$j] . "</td>";}$email = $rs[$i][2];echo "<td> <a href=delete.php?email=$email> Delete </a> </td>";echo "</tr>";}?></table>
            </div>
             <!------------------------------------------------------------------------ -->
             <div id="html" class="container" data-aos="fade-up" >     
             <h3>List of HTML & CSS courses participants </h3><br><table width="100%" border="1"><tr><th>Prenom</th><th>Nom</th><th>Email</th><th>Institut</th><th>Classe</th><th>Numero</th><th>Experience</th><th>Status</th><th>Refuse</th><th>Accept</th></tr></tr><?php include "connect.php";$affichage_js = "SELECT nom,prenom,email,institut,classe,tel,exp,resultat FROM participants WHERE formation='html_css'";$req = $db->query($affichage_js);$rs = $req->fetchAll();for ($i=0; $i<$req->rowCount(); $i++){echo "<tr>";for ($j=0; $j<$req->columnCount(); $j++){echo "<td>" . $rs[$i][$j] . "</td>";}$email = $rs[$i][2];if($rs[$i][7]=="Pending"){ echo "<td> <a href=refuser.php?email=$email&lang=html_css> Refuse </a> </td><td> <a href=accepter.php?email=$email&lang=html_css> Accept </a> </td></tr>";}else echo "<td>--</td><td>--</td></tr>";}?></table>
             </div>
             <!------------------------------------------------------------------------ -->
             <div id="instructors" class="container" data-aos="fade-up" >     
             <h3>List of all Instructors in Cyber Park </h3><br><table width="100%" border="1"><tr><th>Prenom</th><th>Nom</th><th>Email</th><th>CIN</th><th>Numero Tel</th><th>Email</th><th>Course</th><th></th></tr></tr><?php include "connect.php";$affichage_js = "SELECT * FROM instructor ";$req = $db->query($affichage_js);$rs = $req->fetchAll();for ($i=0; $i<$req->rowCount(); $i++){echo "<tr>";for ($j=0; $j<$req->columnCount(); $j++){echo "<td>" . $rs[$i][$j] . "</td>";}$email = $rs[$i][5];echo "<td> <a href=delete.php?email=$email> Delete </a> </td>";echo "</tr>";}?></table>
             </div>
             <!------------------------------------------------------------------------ -->
             <div id="js" class="container" data-aos="fade-up" >     
             <h3>List of JavaScript courses participants </h3><br><table width="100%" border="1"><tr><th>Prenom</th><th>Nom</th><th>Email</th><th>Institut</th><th>Classe</th><th>Numero</th><th>Experience</th><th>Status</th><th>Refuse</th><th>Accept</th></tr></tr><?php include "connect.php";$affichage_js = "SELECT nom,prenom,email,institut,classe,tel,exp,resultat FROM participants WHERE formation='js'";$req = $db->query($affichage_js);$rs = $req->fetchAll();for ($i=0; $i<$req->rowCount(); $i++){echo "<tr>";for ($j=0; $j<$req->columnCount(); $j++){ echo "<td>" . $rs[$i][$j] . "</td>";}$email = $rs[$i][2];if($rs[$i][7]=="Pending"){ echo "<td> <a href=refuser.php?email=$email&lang=js> Refuse </a> </td><td> <a href=accepter.php?email=$email&lang=js> Accept </a> </td></tr>";}else echo "<td>--</td><td>--</td></tr>";}?></table>
             </div>
             <!------------------------------------------------------------------------ -->
             <div id="php" class="container" data-aos="fade-up" >     
             <h3>List of PHP & Laravel courses participants </h3><br><table width="100%" border="1"><tr><th>Prenom</th><th>Nom</th><th>Email</th><th>Institut</th><th>Classe</th><th>Numero</th><th>Experience</th><th>Status</th><th>Refuse</th><th>Accept</th></tr></tr><?php include "connect.php";$affichage_js = "SELECT nom,prenom,email,institut,classe,tel,exp,resultat FROM participants WHERE formation='php_laravel'";$req = $db->query($affichage_js);$rs = $req->fetchAll();for ($i=0; $i<$req->rowCount(); $i++){echo "<tr>";for ($j=0; $j<$req->columnCount(); $j++){echo "<td>" . $rs[$i][$j] . "</td>";}$email = $rs[$i][2];if($rs[$i][7]=="Pending"){ echo "<td> <a href=refuser.php?email=$email&lang=php_laravel> Refuse </a> </td><td> <a href=accepter.php?email=$email&lang=php_laravel> Accept </a> </td> </tr>";}else echo "<td>--</td><td>--</td></tr>";}?></table>
             </div>
             <!------------------------------------------------------------------------ -->
             <div id="poo" class="container" data-aos="fade-up" >              
      <h3>List of JAVA & C# courses participants </h3><br><table width="100%" border="1"><tr><th>Prenom</th><th>Nom</th><th>Email</th><th>Institut</th><th>Classe</th><th>Numero</th><th>Experience</th><th>Status</th><th>Refuse</th><th>Accept</th></tr></tr><?php include "connect.php";
      $affichage_js = "SELECT nom,prenom,email,institut,classe,tel,exp,resultat FROM participants WHERE formation='poo'";
      $req = $db->query($affichage_js);
      $rs = $req->fetchAll();
      for ($i = 0; $i < $req->rowCount(); $i++) {
        echo "<tr>";
        for ($j = 0; $j < $req->columnCount(); $j++) {
          echo "<td>" . $rs[$i][$j] . "</td>";
        }
        $email = $rs[$i][2];
        if($rs[$i][7]=="Pending"){ echo "<td> <a href=refuser.php?email=$email&lang=poo> Refuse </a> </td><td> <a href=accepter.php?email=$email&lang=poo> Accept </a> </td></tr>";}else echo "<td>--</td><td>--</td></tr>";}
      ?></table>  
             </div>
             <!------------------------------------------------------------------------ -->
             <div id="ajout" class="container" data-aos="fade-up" >
             <h3>Add a new Instructor : </h3><form action="add_instructor.php" method="post" role="form" class="php-email-form"><input type="radio" name="s" value="Mr.">Mr    <input type="radio" name="s" value="Mme.">Mme<br><br><div class="row"><div class="col-md-6 form-group"><input type="text" name="first" class="form-control" id="name" placeholder="First Name" required></div><div class="col-md-6 form-group mt-3 mt-md-0"><input type="text" class="form-control" name="last" id="last" placeholder="Last Name" required></div></div> <br><div class="row"><div class="col-md-6 form-group"><input type="text" name="cin" class="form-control" id="name" placeholder="CIN" required></div><div class="col-md-6 form-group mt-3 mt-md-0"><input type="text" class="form-control" name="tel" id="email" placeholder="Mobile Number" required></div></div><div class="form-group mt-3"><input type="email" class="form-control" name="email" id="subject" placeholder="Email" required></div><div class="form-group mt-3"><select name="formation"><option value="html_css">HTML</option><option value="php_laravel">PHP & Laravel</option><option value="js">JavaScript</option><option value="poo">JAVA & C#</option></select></div><div class="my-3"><div class="loading">Loading</div><div class="error-message"></div><div class="sent-message">Your message has been sent. Thank you!</div></div><div class="text-center"><button type="submit">Send Message</button></div></form>
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
          <a href="https://www.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://instagram.com/itzhassen" class="instagram"><i class="bx bxl-instagram"></i></a>
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