
<?php
require_once '../controller/pages.php';
require_once '../controller/'.$pages_controller[3];
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
		<title>Camera reporter</title>
		<meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
		<meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
		<meta name="author" content="Codrops" />
        <link rel="stylesheet" href="../css/bootstrap.css">

        <link rel="stylesheet" type="text/css" href="../css/watchman.css" />
		<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="../css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../css/component.css" />

		<script src="../js/modernizr.custom.js"></script>
	</head>
    <style>

        @font-face {
            font-family: 'Droid Arabic Kufi';
            src: url("../fonts/ubuntu/DroidKufi-Regular.ttf");
        }
        body{
            style="font-family: 'Droid Arabic Kufi'";
        }
    </style>
	<body>
        <?php require_once 'header.php';?>
        <?php require_once $pages_view['watchmanform'];?>


        <script src="../js/respond.min.js"></script>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/owl.carousel.min.js"></script>
		<script src="../js/classie.js"></script>
		<script src="../js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>