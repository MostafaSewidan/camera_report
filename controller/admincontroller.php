<?php

session_start();
if(!empty($_SESSION['power']) && $_SESSION['power'] == 'admin')
{

}else
{
    header('location:../view');
    exit;
}

if (!empty($_GET['action']))
{
    $action = str_secure($_GET['action']);
    if($action == 'add' ||  $action == 'delete')
    {

    }else{
        $action = '';
    }
}else
{
    $action='';
}