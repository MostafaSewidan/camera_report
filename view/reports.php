
<?php  require_once '../controller/pages.php';?>
<?php require_once '../controller/'.$pages_controller['reportscontroller'];?>

<!doctype html>
<html lang="en">
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
    <link rel="stylesheet" type="text/css" href="../css/admin.css" />
    <link rel="stylesheet" type="text/css" href="../css/reports.css" />
    <link rel="stylesheet" type="text/css" href="../css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="../css/demo.css" />
    <link rel="stylesheet" type="text/css" href="../css/component.css" />

    <script src="../js/modernizr.custom.js"></script>
</head>
<body>
<?php require_once 'header.php';?>
    <center>
        <div  style="
                <?php
                    if(!empty($_SESSION['DL_manager']) && $_SESSION['power'] == 'manager' && !empty($_SESSION['power'])) {
                        ?>
                                    display: block;

                                <?php
                    }else{
                        ?>
                                    display: none;
                                <?php
                    }
                    ?>

                font-family: 'Droid Arabic Kufi';
                color: white;
                background-color: #49c14c;
                text-align: center;
                padding: 15px 0px 16px 0px;
                margin-bottom: 38px;
                border-radius: 8px;
                width: 50%;
                font-weight: bolder;
                font-size: 19px;
                margin-top: 7%;
                ">
            <?php
                            if(!empty($_SESSION['DL_manager']) && $_SESSION['power'] == 'manager' && !empty($_SESSION['power'])) {

                                echo $_SESSION['DL_manager'];
                                $_SESSION['DL_manager'] = '';
                            }
            ?>
        </div>
        <div class="tabel">


            <?php require_once 'tabel.php';?>
        </div>
    </center>
<!--================================================================-->

<script src="../js/respond.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/classie.js"></script>
<script src="../js/gnmenu.js"></script>
<script>
    new gnMenu( document.getElementById( 'gn-menu' ) );
</script>
<?php require_once $pages_view['footer'];?>
</body>
</html>