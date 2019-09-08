<?php
error_reporting(0);
require_once '../model/conection.php';
require_once 'defultcontroller.php';
$pages_view = array
            (
    'index.php',
    'admin.php',
    'header.php',
    'watchman.php',
    'TheReport.php',
    'reports.php',
    'tabel.php',
    'adminmaster'=>'adminmaster.php',
    'watchmanform'=>'watchmanform.php',
    'reportdetail'=>'../dompdf/reportdetail.php',
    'footer'=>'footer.php',
    'editpass'=>'editpass.php',
    'adminadd'=>'adminadd.php',
    'admindelete'=>'admindelete.php',
    'manager'=>'manager.php',
    'search'=>'search.php',
    'searchform'=>'searchform.php',
    'manager_watchman'=>'manager_watchman.php',
    'manager_watchman_add'=>'manager_watchman_add.php',
    'manager_watchman_delete'=>'manager_watchman_delete.php'
            );

$pages_controller = array
(
    'logincontroller.php',
    'indexcontroller.php',
    'admincontroller.php',
    'watchmancontroller.php',
    'logoutcontroller.php',
    'reports.php',
    'tabel.php',
    'watchmanformcontroller'=>'watchmanformcontroller.php',
    'reportscontroller'=>'reportscontroller.php',
    'tablecontroller'=>'tablecontroller.php',
    'editpasscontroller'=>'editpasscontroller.php',
    'editpassformcontroller'=>'editpassformcontroller.php',
    'adminaddcontroller'=>'adminaddcontroller.php',
    'admindeletecontroller'=>'admindeletecontroller.php',
    'admindeleteactioncontroller'=>'admindeleteactioncontroller.php',
    'managercontroller'=>'managercontroller.php',
    'managerdeletcontroller'=>'managerdeletcontroller.php',
    'searchcontroller'=>'searchcontroller.php',
    'searchformcontroller'=>'searchformcontroller.php',
    'manager_watchman_deletecontroller'=>'manager_watchman_deletecontroller.php',
    'manager_watchman_addcontroller'=>'manager_watchman_addcontroller.php'

);