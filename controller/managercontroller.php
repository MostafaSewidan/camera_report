<?php
require_once '../controller/pages.php';
session_start();
if(!empty($_SESSION['power']) && $_SESSION['power'] == 'manager')
{

}else
{
    header('location:../view');
    exit;
}

if(!empty($_GET['action_manager']))
{
    $action = str_secure($_GET['action_manager']);
    if($action == 'editwatchman' || $action == 'add' || $action == 'delete')
    {

    }else
    {
        header('Location:'.$pages_view[5].'?action=all');
    }
}else {
    header('Location:' . $pages_view[5] . '?action=all');
}