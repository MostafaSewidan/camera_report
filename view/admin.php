

<?php
require_once '../controller/pages.php';
require_once '../controller/'.$pages_controller[2];
error_reporting(0);
?>



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
    <link rel="stylesheet" href="../css/all.css">

    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/admin.css" />
    <link rel="stylesheet" type="text/css" href="../css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="../css/demo.css" />
    <link rel="stylesheet" type="text/css" href="../css/component.css" />

    <script src="../js/modernizr.custom.js"></script>
</head>
<body>
<?php require_once 'header.php';?>

<?php
if(empty($action))
    {
        require_once $pages_view['adminmaster'];
    }
    elseif( $action == 'add')
    {
        require_once $pages_view['adminadd'];
    }
elseif( $action == 'delete')
    {
        require_once $pages_view['admindelete'];
    }
?>

<?php require_once $pages_view['footer'];?>
</body>
</html>