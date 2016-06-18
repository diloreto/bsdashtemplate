<?php
	require("inc/head.inc.php");
	$page = !empty($_GET['a']) ? $_GET['a'] : "home";
	$file = "pages/" . $page . ".php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>HamMar - Home</title>
	<?php require("header.php"); ?>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php require("navigation.php"); ?>
        <!-- /Navigation -->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Body -->
                <?php if(file_exists($file)) require($file); ?>
                <!-- /Body -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

	<?php require("footer.php"); ?>
    
</body>

</html>
