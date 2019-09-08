
<?php
require_once '../controller/pages.php';
require_once '../controller/' . $pages_controller[1];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Camera reporter</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/vendor1/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/vendor1/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/vendor1/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/vendor1/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/vendor1/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/vendor1/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/utillogin.css">
    <link rel="stylesheet" type="text/css" href="../css/mainlogin.css">
<!--    <link href="--><?//= asset('../css/mainlogin.css')?><!--" rel="stylesheet">-->
<!--    <link href="--><?//= asset('../css/utillogin.css')?><!--" rel="stylesheet">-->
    <!--===============================================================================================-->
    <style>
        @font-face {
            font-family: 'Droid Arabic Kufi';
            src: url("../fonts/ubuntu/DroidKufi-Regular.ttf");
        }
    </style>
</head>
<body >

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="../controller/<?= $pages_controller[0]?>" method="post">
                <div  style="
                display: <?= $_SESSION['display']?>;
                    font-family: 'Droid Arabic Kufi';
                    color: white;
                    background-color: #c13737;
                    text-align: center;
                    padding: 8px 0px 7px 0px;
                    margin-bottom: 19px;
                    border-radius: 8px;
                    ">
                    كلمة المرور خاطئة
                </div>
					<span class="login100-form-title p-b-26" style="font-family: 'Droid Arabic Kufi'">
						مرحبا
					</span>


                <div class="wrap-input100 validate-input"data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                    <input class="input100" type="password" name="pass" required autocomplete="off">
                    <span class="focus-input100" style="font-family: 'Droid Arabic Kufi'" data-placeholder="كلمة المرور"></span>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" style=" font-family: 'Droid Arabic Kufi';
">
                            تسجيل الدخول
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="../vendor/vendor1/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="../vendor/vendor1/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="../vendor/vendor1/bootstrap/js/popper.js"></script>
<script src="../vendor/vendor1/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../vendor/vendor1/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="../vendor/vendor1/daterangepicker/moment.min.js"></script>
<script src="../vendor/vendor1/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="../vendor/vendor1/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="../js/main.js"></script>

</body>
</html>