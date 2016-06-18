<?php

// Prevent hitting the homepage inadvertently without logging in
$sf = $_SERVER['SCRIPT_NAME'];
$sfp = explode("/", $sf);
session_start();
if( $sfp[ sizeof($sfp)-1 ] !== "login.php" && empty($_SESSION['user_session']) ){
	header("location:login.php");
}

// If you are logged in, connect to the database
 require_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM users WHERE EMAIL_ADDRESS =:email");
$stmt->execute(array(":email"=>$user_email));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$count = $stmt->rowCount();
   



?>