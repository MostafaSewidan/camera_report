<?php
session_start();
require_once 'pages.php';



if(!empty($_GET['erea_ID']))
{
    $erea_ID = int_secure($_GET['erea_ID']);
    $conn->exec('DELETE FROM `erea` WHERE `erea`.`ereaID` = "'.$erea_ID.'"');
    $_SESSION['delete_sms'] = 'تم الحذف بنجاح';
    header('Location:../view/'.$pages_view[1].'?action=delete');
    exit;
}
if(!empty($_GET['DVR_ID']))
{
    $DVR_ID = int_secure($_GET['DVR_ID']);
    $conn->exec('DELETE FROM `dvr` WHERE `dvr`.`dvrID` = "'.$DVR_ID.'"');
    $_SESSION['delete_sms'] = 'تم الحذف بنجاح';
    header('Location:../view/'.$pages_view[1].'?action=delete');
    exit;
}