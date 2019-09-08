<?php

session_start();
if(!empty($_SESSION['power']) && $_SESSION['power'] == 'watchman')
{

}else
{
    header('location:../view');
    exit;
}


//fetch the watchers names

$watcher_name = $conn->query('SELECT watchman_name FROM  watcher');
$watcher_name_fetch = $watcher_name->fetchAll(PDO::FETCH_BOTH);


//************************************************

//fetch the DVR numbers

$DVR = $conn->query('SELECT dvr FROM  dvr');
$DVR_fetch = $DVR->fetchAll(PDO::FETCH_BOTH);


//************************************************


//fetch the EREA

$erea = $conn->query('SELECT erea FROM  erea');
$erea_fetch = $erea->fetchAll(PDO::FETCH_BOTH);


//************************************************
