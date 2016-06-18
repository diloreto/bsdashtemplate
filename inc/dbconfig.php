<?php

// Connect to database
 $db_host = "localhost";
 $db_name = "tonydilo_marinaro";
 $db_user = "tonydilo_matty";
 $db_pass = "Concrete#1";
 
 try{
  $db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
  $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch(PDOException $e){
  echo $e->getMessage();
 }


?>