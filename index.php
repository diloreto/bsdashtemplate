<?php
	$page = !empty($_GET['a']) ? $_GET['a'] : "dashboard";
	$file = "pages/" . $page . ".php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php require("header.php"); ?>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php require("navigation.php"); ?>
        <!-- /Navigation -->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Body -->
                <?php require($file); ?>
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
