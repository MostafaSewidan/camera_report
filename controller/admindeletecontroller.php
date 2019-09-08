<?php
if(!empty($_SESSION['power']) && $_SESSION['power'] == 'admin')
{

}else
{
    header('location:../view');
    exit;
}
$DVR = $conn->query('SELECT * FROM dvr');
$DVR_fetch = $DVR->fetchAll(PDO::FETCH_BOTH);

$erea = $conn->query('SELECT * FROM erea');
$erea_fetch = $erea->fetchAll(PDO::FETCH_BOTH);