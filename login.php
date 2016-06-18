<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>

	<title>HamMar - Login</title>

	<?php require("header.php"); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
        
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.js"></script>
  </head>

  <body>

    <div class="container">

      <form class="form-signin" id="form-signin" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" id="btn-login" name="btn-login" type="submit">Sign in</button>
        
        <div id="error">
        <!-- error will be shown here ! -->
        </div>
    
        
      </form>

    </div> <!-- /container -->


	<script type="text/javascript" src="js/login.js"></script>

  </body>
</html>
