<?php

$email = $_GET["email"];
include "connect.php";
$sql = "DELETE FROM instructor WHERE email='$email'";
$db->query($sql);



$sql2 = "DELETE FROM toutcomptes WHERE email='$email'";
$db->query($sql2);
header("Location:admin.php");

?>