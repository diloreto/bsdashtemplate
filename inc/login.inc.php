<?php

 session_start();
 require_once 'dbconfig.php';

if(isset($_POST['btn-login'])){
	$user_email = trim($_POST['inputEmail']);
	$user_password = trim($_POST['inputPassword']);
	
	$password = md5($user_password);
	
	try{ 
	
		$stmt = $db_con->prepare("SELECT * FROM users WHERE EMAIL_ADDRESS=:email");
		$stmt->execute(array(":email"=>$user_email));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$count = $stmt->rowCount();
		
		
		if($row['PASSWORD']==$password){
			echo "ok"; // log in
			$_SESSION['user_session'] 	= $row['USER_ID'];
			$_SESSION['first_name'] 		= $row['FIRST_NAME'];
			$_SESSION['last_name'] 		= $row['LAST_NAME'];
		}
		else{  
			echo "Email / password combo does not exist. Try again"; // wrong details 
		}
		
	} catch(PDOException $e){
		echo $e->getMessage();
	}
}

?>