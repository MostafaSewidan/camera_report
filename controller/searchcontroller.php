<?php

session_start();
if(!empty($_SESSION['power']) && ($_SESSION['power'] == 'watchman' || $_SESSION['power'] == 'admin' || $_SESSION['power'] == 'manager') )
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


//fetch the accidant name

$accident_name = $conn->query('SELECT `name` FROM  `acedant`');
$accident_name_fetch = $accident_name ->fetchAll(PDO::FETCH_BOTH);

//*************************************************
$accident = $conn->query('SELECT * FROM  `acedant`');
$accident_fetch = $accident ->fetchAll(PDO::FETCH_BOTH);



for ( $i = 0; $i < count($accident_fetch); $i++ )
{
    $accident_name_in_report = $conn->query('SELECT `accident_name` FROM  `report` WHERE `report`.`accident_name`="'.$accident_fetch[$i][1].'"');
    $accident_name_in_report_fetch = $accident_name_in_report ->fetchAll(PDO::FETCH_BOTH);

    if (empty($accident_name_in_report_fetch))
    {
        $conn->exec('DELETE FROM `acedant` WHERE `acedant`.`ID` ="'.$accident_fetch[$i][0].'" ');
    }
}


//************************************************
