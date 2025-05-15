<?php
// session_start();
include "../include/confige.php";
$userid = 0;
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['psw'];
$cpassword = $_POST['cpsw'];
$adds = $_POST['ads'];
// $status = 'user';








$query = "INSERT INTO signup(userid, name, email, password, cpassword, adds) VALUES (:userid, :name,  :email, :password, :cpassword,  :adds)";

$query = $dbh->prepare($query);
$query->bindparam(":userid", $userid);
$query->bindparam(":name", $name);
$query->bindparam(":email", $email);
$query->bindparam(":password", $password);
$query->bindparam(":cpassword", $cpassword);
$query->bindparam(":adds", $adds);
// $query->bindparam(":status", $status);
$query->execute();   


    $daud="../index.php";
    header("Location: " . $daud);
    exit;
?>
