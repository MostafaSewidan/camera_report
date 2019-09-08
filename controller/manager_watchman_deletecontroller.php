<?php
session_start();
require_once 'pages.php';



if(!empty($_GET['watchman_ID']))
{
    $watchman_ID = int_secure($_GET['watchman_ID']);
    $conn->exec('DELETE FROM `watcher` WHERE `watcher`.`watchmanID` = "'.$watchman_ID.'"');
    $_SESSION['delete_sms'] = 'تم الحذف بنجاح';
    header('Location:../view/'.$pages_view['manager'].'?action_manager=delete');
    exit;
}