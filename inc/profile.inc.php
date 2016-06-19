<?php

 session_start();
 require_once 'dbconfig.php';

// If saving profile, check and POST
if(isset($_POST['btn-submit-profile'])){
	$user_email = trim($_POST['inputEmail']);
	$user_password = trim($_POST['inputPassword']);
	
	$password = md5($user_password);
	
}


// On every call to this file, get the entire profile
if( isset( $_SESSION['user_session'] ) ){
	try{ 
	
		$stmt = $db_con->prepare("SELECT * FROM users WHERE USER_ID = :userID");
		$stmt->execute(array(":userID"=>$_SESSION['user_session']));
		$count = $stmt->rowCount();
		
		if( $count == 1 ){
			// Grab user data
			$userObj = $stmt->fetch(PDO::FETCH_ASSOC);
			// Do Stuff
		}
		else{  
			echo "Something went wrong fetching user data"; // wrong details 
		}
		
	} catch(PDOException $e){
		echo $e->getMessage();
	}

}


?>