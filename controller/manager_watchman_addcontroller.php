<?php

session_start();
require_once 'pages.php';

if(!empty($_SESSION['power']) && $_SESSION['power'] == 'manager')
{

}else
{
    header('location:../view');
    exit;
}

if($_SERVER['REQUEST_METHOD'] == 'POST')
{


    $watchman = str_secure($_POST['add_watchman']);


    $DB_watchman = $conn->query('SELECT watchman_name FROM `watcher` WHERE watchman_name = "'.$watchman.'"');
    $DB_watchman_fetch = $DB_watchman->fetchAll(PDO::FETCH_BOTH);

    if  (!empty($DB_watchman_fetch))
    {

        $_SESSION['add_error'] = 'الاسم الذي تحاول اضافته موجود بالفعل';
        header('Location:../view/'.$pages_view['manager'].'?action_manager=add');
        exit;
    }

    else
    {
        $conn->exec('INSERT INTO `watcher` (`watchman_name`) VALUES ("'.$watchman.'")');
        $_SESSION['add_sms'] = 'تمت الاضافة بنجاح';
        header('Location:../view/'.$pages_view['manager'].'?action_manager=add');
        exit;
    }
}
else
{
    header('Location:../view/');
    exit;
}