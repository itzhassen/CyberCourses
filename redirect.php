<?php
include "connect.php";
session_start();
$profile = $_SESSION["profil"];
if ($profile=="admin")
{
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $sql = "SELECT * FROM users WHERE user='$user' AND pass='$pass';";
    $req = $db->query($sql);
    $rs = $req->fetchAll();
    if ($req->rowCount() > 0)
    header("location: admin.php");
else
{
    echo "Admin not found, you will be redirected to user space "; 
    header( "refresh:2;url=index.html" );
}

}
else
{

    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $sql = "SELECT * FROM instructor WHERE email='$email' AND Tel='$tel';";
    $req = $db->query($sql);
    $rs = $req->fetchAll();
    $_SESSION["formation"] = $rs[0][6];
    $_SESSION["civ"] = $rs[0][0];
    $_SESSION["prenom"] = $rs[0][1];
    $_SESSION["nom"] = $rs[0][2];
    if ($req->rowCount() > 0)
    header("location: instructor.php");
else
{
    echo "Instructor not found, you will be redirected to user space "; 
    header( "refresh:2;url=index.html" );
}


}



?>