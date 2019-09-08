
<?php  require_once '../controller/pages.php';?>
<?php require_once '../controller/'.$pages_controller['editpasscontroller'];?>

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

<div class="form">
    <center>


        <div  style="
        <?php
        if(!empty($_SESSION['changepass_error'])) {
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
                background-color: #c13737;
                text-align: center;
                padding: 15px 0px 16px 0px;
                margin-bottom: 38px;
                border-radius: 8px;
                width: 50%;
                font-weight: bolder;
                font-size: 19px;
                ">
            <?php
            if(!empty($_SESSION['changepass_error'])) {

                echo $_SESSION['changepass_error'];
                $_SESSION['changepass_error'] = '';
            }
            ?>
        </div>


        <div  style="
        <?php
        if(!empty($_SESSION['changepass_done'])) {
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
                ">
            <?php
            if(!empty($_SESSION['changepass_done'])) {

                echo $_SESSION['changepass_done'];
                $_SESSION['changepass_done'] = '';
            }
            ?>
        </div>




        <form method="post"  action="../controller/<?= $pages_controller['editpassformcontroller']?>">
            <table>
                <tr>
                    <td>
                        <input style='text-align: left' type="password" required autocomplete="off" name="old">
                    </td>
                    <td>
                        كلمة المرور القديمة
                    </td>

                </tr>
                <tr>
                    <td>
                        <input style='text-align: left' type="password" required autocomplete="off" name="new">
                    </td>
                    <td>
                        كلمة المرور الجديدة
                    </td>
                </tr>
                <tr>
                    <td>
                        <input style='text-align: left' type="password" required autocomplete="off" name="rnew">
                    </td>
                    <td style="display: none">
                        <input style='display: none' type="text" value="<?= $user?>" name="action">
                    </td>

                    <td>
                        اعادة كلمة السر الجديدة
                    </td>
                </tr>

            </table>
            <input  class="btn btn-info" style="
            margin-top: 27px;
    font-weight: bolder;
    font-size: 27px;
    padding: 1% 7% 1% 7%;" type="submit" value="حفظ" name ="save">

        </form>
    </center>
</div>

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