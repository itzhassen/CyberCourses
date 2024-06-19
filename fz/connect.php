<?php 
$srv = "mysql:host=sql107.ezyro.com; dbname=ezyro_33406372_cybercourses";
try 
{$db = new PDO($srv,"ezyro_33406372","xh4l4et9sh3");}
catch(PDOException $e){echo "Erreur:".$e->getMessage()."<br>";}
/*if ($db)
    echo "hello";*/

?>