<?php

// Connect to database
 $db_host = "migtech.cw07l7lthaxp.us-east-1.rds.amazonaws.com";
 $db_name = "hammar";
 $db_user = "hammar";
 $db_pass = "Hammar#1";
 
 try{
  $db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
  $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch(PDOException $e){
  echo $e->getMessage();
 }
 
 
 function insert_record( $db_con, $table_name, $recordObj ){
	if(!isset($recordObj) || !isset($table_name) || !isset($db_con)) return;
	 
	 $s = "INSERT INTO $table_name (";
	 $keys = array_keys($recordObj);
	 $vals = array_values($recordObj); 
	 for($x = 0; $x < sizeof($keys); $x++){
		$s .= $keys[$x] . ",";
	 }
	 $s = rtrim($s, ",");
		 
	 $s .= ") VALUES (";
	 for($x = 0; $x < sizeof($values); $x++){
		$s .= $values[$x] . ",";
	 }
	 $s = rtrim($s, ",");
	 
	 $s .= ")";
	 
	 $stmt = $db_con->prepare($s);
	 $stmt->execute( );
	 $row = $stmt->fetch(PDO::FETCH_ASSOC);
	 $count = $stmt->rowCount();
	
	 return $count;
	 
 }
 
 function update_record( $db_con, $table_name, $keyObj, $recordObj ){
	if(!isset($recordObj) || !isset($table_name) || !isset($db_con)) return;
	 
	 $keysAtt = array_keys($recordObj);
	 $valsAtt = array_values($recordObj); 
	 $keysIdx = array_keys($keyObj);
	 $valsIdx = array_values($keyObj);
	 
	 $s = "UPDATE $table_name SET ";
	 
	 for($x = 0; $x < sizeof($keysAtt); $x++){
		$s .= $keysAtt[$x] . "=" . $valsAtt[$x] . ",";
	 }
	 $s = rtrim($s, ",");
	 
	 $s .= " WHERE " . $keysIdx[0] . " = '" . $valsIdx[0] . "'";
	 
	 $stmt = $db_con->prepare($s);
	 $stmt->execute( );
	 $row = $stmt->fetch(PDO::FETCH_ASSOC);
	 $count = $stmt->rowCount();
	
	 return $count;
		 
 }
 
 function get_record( $db_con, $table_name, $keyObj ){
	
	if(!isset($keyObj) || !isset($table_name) || !isset($db_con)) return;
	
	$keys = array_keys($keyObj);
	$vals = array_values($keyObj);
	 
	 $s = "SELECT * FROM " . $table_name . " WHERE " . $keys[0] . " = '" . $vals[0] . "'";
	 
	 $stmt = $db_con->prepare($s);
	 $stmt->execute( );
	 $result = $stmt->fetch(PDO::FETCH_ASSOC);
	 $count = $stmt->rowCount();
	
	 return $result; // assoc array I believe
 
	 
 }
 
 function delete_record( $db_con, $table_name, $keyObj ){
	if(!isset($keyObj) || !isset($table_name) || !isset($db_con)) return;
	
	$keys = array_keys($keyObj);
	$vals = array_values($keyObj);
	 
	 $s = "DELETE FROM " . $table_name . " WHERE " . $keys[0] . " = '" . $vals[0] . "'";
	 
	 $stmt = $db_con->prepare($s);
	 $stmt->execute( );
	 $row = $stmt->fetch(PDO::FETCH_ASSOC);
	 $count = $stmt->rowCount();
	
	 return $count;
	 
 }


?>