<?php
session_start();
if(
    !empty($_GET['action']) &&

    !empty($_SESSION['power']) &&
    (
        $_SESSION['power'] == 'watchman' ||
        $_SESSION['power'] == 'admin' ||
        $_SESSION['power'] == 'manager'
    ))
{

}else
{
    header('location:../view');
    exit;
}

$action = str_secure($_GET['action']);

if( $action == 'all' || $action == 'yesterday' || $action == 'today' || $action == 'search' )
{

}else
{
    header('location:../view');
    exit;
}
