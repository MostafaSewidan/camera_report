<?php
session_start();
require_once '../controller/pages.php';
require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;


$ID = int_secure($_GET['ID']);
if(
    !empty($_GET['ID']) &&

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

$DB_ID = $conn->query('SELECT * FROM report where ReportId ="'.$ID.'"');
$DB_ID_fetch = $DB_ID->fetchAll(PDO::FETCH_BOTH);

if(empty($DB_ID_fetch))
{
    header('location:../view');
    exit;
}




$dompdf = new Dompdf();

$dompdf->loadhtml('<center><h1>'.$DB_ID_fetch[0][1].'</h1></center>');
$dompdf->setPaper('A4','landscape');
$dompdf->render();
$dompdf->stream('codexworld',array('Attachment'=>0));
