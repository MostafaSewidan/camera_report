<?php
//error_reporting(0);
require_once '../controller/pages.php';
if($_SERVER['PHP_SELF'] == '/cam/app/model/conection.php')
{
    header('Location:../view');
    exit;
}
try {
    $conn = new PDO('mysql:host=localhost;dbname=camerareporter', 'root', '',
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8',
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
        )
    );




}
catch (PDOException $e)
{
    echo $e->getMessage('sorry');
}
date_default_timezone_set('Africa/Cairo');