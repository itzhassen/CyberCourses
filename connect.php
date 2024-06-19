<?php 
$srv = "mysql:host=localhost; dbname=cybercourses";
try 
{$db = new PDO($srv,"root","");}
catch(PDOException $e){echo "Erreur:".$e->getMessage()."<br>";}
?>