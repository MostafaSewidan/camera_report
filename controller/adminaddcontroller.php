<?php
session_start();
require_once 'pages.php';



if($_SERVER['REQUEST_METHOD'] == 'POST')
{

    if(!empty($_POST['add_dvr']) && !empty($_POST['add_erea']))
    {

        $DVR = int_secure($_POST['add_dvr']);
        $erea = str_secure($_POST['add_erea']);

        $DB_DVR = $conn->query('SELECT dvr FROM `dvr` WHERE dvr = "DVR '.$DVR.'"');
        $DB_DVR_fetch = $DB_DVR->fetchAll(PDO::FETCH_BOTH);

        $DB_erea = $conn->query('SELECT erea FROM `erea` WHERE erea = "'.$erea.'"');
        $DB_erea_fetch = $DB_erea->fetchAll(PDO::FETCH_BOTH);

        if  (!empty($DB_DVR_fetch) && !empty($DB_erea_fetch))
        {

            $_SESSION['add_error'] = 'البيانات التي تحاول ادخالها موجوده بالفعل';
            header('Location:../view/'.$pages_view[1].'?action=add');
            exit;
        }

        elseif(!empty($DB_DVR_fetch))
        {
            $_SESSION['add_error'] = 'الذي تحاول اذافته موجود بالفعل DVR';
            header('Location:../view/'.$pages_view[1].'?action=add');
            exit;

        }

        elseif (!empty($DB_erea_fetch))
        {
            $_SESSION['add_error'] = 'المنطقة التي تحاول اضافتها موجوده بالفعل';
            header('Location:../view/'.$pages_view[1].'?action=add');
            exit;
        }
        else
        {
            $conn->exec('INSERT INTO `erea` (`erea`) VALUES ("'.$erea.'")');
            $conn->exec('INSERT INTO `dvr` (`dvr`) VALUES ("DVR '.$DVR.'")');
            $_SESSION['add_sms'] = 'تمت الاضافة بنجاح';
            header('Location:../view/'.$pages_view[1].'?action=add');
            exit;
        }






    }


    elseif(!empty($_POST['add_erea']) && empty($_POST['add_dvr']))
    {


        $erea = str_secure($_POST['add_erea']);

        $DB_erea = $conn->query('SELECT erea FROM `erea` WHERE erea = "'.$erea.'"');
        $DB_erea_fetch = $DB_erea->fetchAll(PDO::FETCH_BOTH);

        if (!empty($DB_erea_fetch))
        {
            $_SESSION['add_error'] = 'المنطقة التي تحاول اضافتها موجوده بالفعل';
            header('Location:../view/'.$pages_view[1].'?action=add');
            exit;
        }
        else
        {
            $conn->exec('INSERT INTO `erea` (`erea`) VALUES ("'.$erea.'")');
            $_SESSION['add_sms'] = 'تمت الاضافة بنجاح';
            header('Location:../view/'.$pages_view[1].'?action=add');
            exit;
        }

    }


    elseif(empty($_POST['add_erea']) && !empty($_POST['add_dvr']))
    {

        $DVR = int_secure($_POST['add_dvr']);

        $DB_DVR = $conn->query('SELECT dvr FROM `dvr` WHERE dvr = "DVR '.$DVR.'"');
        $DB_DVR_fetch = $DB_DVR->fetchAll(PDO::FETCH_BOTH);


       if(!empty($DB_DVR_fetch))
        {
            $_SESSION['add_error'] = 'الذي تحاول اذافته موجود بالفعل DVR';
            header('Location:../view/'.$pages_view[1].'?action=add');
            exit;

        }

        else
        {
            $conn->exec('INSERT INTO `dvr` (`dvr`) VALUES ("DVR '.$DVR.'")');
            $_SESSION['add_sms'] = 'تمت الاضافة بنجاح';
            header('Location:../view/'.$pages_view[1].'?action=add');
            exit;
        }


    }

    elseif (empty($_POST['add_dvr']) && empty($_POST['add_erea']))
    {
        $_SESSION['add_error'] = 'يرجي اضافة البيانات التي تود حفظها';
        header('Location:../view/'.$pages_view[1].'?action=add');
        exit;
    }

}
else{
    header('Location:../view/');
    exit;
}