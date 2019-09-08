<?php

require_once 'pages.php';
session_start();
if(!empty($_SESSION['power']) && $_SESSION['power'] == 'manager')
{
    if (!empty($_GET['ID']))
    {
        $ID = int_secure($_GET['ID']);
        $action = str_secure($_GET['action']);
        $conn->exec('DELETE FROM `report` WHERE `report`.`ReportId` = "'.$ID.'"');
        $_SESSION['DL_manager'] = 'تم حذف التقرير بنجاح';

        header('location:../view/'.$pages_view[5].'?action='.$action);
        exit;
    }else
    {
        header('location:../view');
        exit;
    }
}else
{
    header('location:../view');
    exit;
}


