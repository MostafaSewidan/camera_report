<?php
session_start();
if(
    !empty($_GET['user']) &&

    !empty($_SESSION['power']) &&
    (
        $_SESSION['power'] == 'admin' ||
        $_SESSION['power'] == 'manager'
    ))
{

}else
{
    header('location:../view');
    exit;
}

$user = str_secure($_GET['user']);

if( $user == 'admin' || $user == 'manager' || $user == 'watchman' )
{

}else
{
    header('location:../view');
    exit;
}