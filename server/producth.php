<?php
session_start();
include "../include/confige.php";
$userid = $_SESSION['userid'];
$pid = 0;
// $pid = $_POST['pid'];
$pname = $_POST['pname'];
$pprice = $_POST['pprice'];
$pdescription = $_POST['pdescription'];
// $status = 'user';








$query = "INSERT INTO product(userid, pid, pname, pprice, pdescription) VALUES (:userid, :pid, :pname, :pprice, :pdescription)";

$query = $dbh->prepare($query);
$query->bindparam(":userid", $userid);
$query->bindparam(":pid", $pid);
$query->bindparam(":pname", $pname);
$query->bindparam(":pprice", $pprice);
$query->bindparam(":pdescription", $pdescription);
// $query->bindparam(":adds", $adds);
// $query->bindparam(":status", $status);
$query->execute();   



    $daud="../index.php";
    header("Location: " . $daud);
    exit;
?>
