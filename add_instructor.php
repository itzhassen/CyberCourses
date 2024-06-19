<?php
include "connect.php";
$civ = $_POST["s"];
$first = $_POST["first"];
$last = $_POST["last"];
$cin = $_POST["cin"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$formation = $_POST["formation"];
$sql = "INSERT INTO instructor VALUES('$civ','$first','$last','$cin','$tel','$email','$formation') ";
$db->query($sql);
header("Location:admin.php");
?>