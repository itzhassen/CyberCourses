<?php
include "connect.php";
$nom = $_POST["nom"];
$email = $_POST["email"];
$sujet = $_POST["sujet"];
$msg = $_POST["msg"];
//echo $nom . $email . $sujet . $msg;
$sql = "INSERT INTO contact(nom,email,sujet,message) VALUES ('$nom','$email','$sujet','$msg');";
$db->query($sql);
header("Location:index.html");
?>