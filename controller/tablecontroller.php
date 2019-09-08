<?php
session_start();

if(!empty($_SESSION['power']) && ($_SESSION['power'] == 'watchman' || $_SESSION['power'] == 'admin' || $_SESSION['power'] == 'manager'))
{

}else
{
    header('location:../view');
    exit;
}
$action = str_secure($_GET['action']);

if ($action == 'search')
{
    $reports_fetch = $_SESSION['$DB_data_fetch'];
}
else {
    $reports = $conn->query('SELECT * FROM `report` ORDER BY `report`.`search_date` DESC');
    $reports_fetch = $reports->fetchAll(PDO::FETCH_BOTH);
}