<?php 
include "connect.php";
$email = $_GET["email"];
$lang = $_GET["lang"];
$sql = "UPDATE participants set resultat='Refused' WHERE email='$email' AND formation='$lang'";
 $db->query($sql);
header("location:admin.php");



?>