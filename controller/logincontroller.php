<?php

session_start();
require '../model/conection.php';
if( $_SERVER['REQUEST_METHOD'] == 'POST')
{
    $pass = filter_var($_POST['pass'] , FILTER_SANITIZE_STRING);
    $pass = strtolower($pass);
    $password = $conn->query('SELECT * FROM  userlogin');
    $fetch_password = $password->fetchall(PDO::FETCH_BOTH);

    for($i = 0 ; $i < count($fetch_password); $i++)
    {
        if (password_verify($pass,$fetch_password[$i][1]))
        {
            $_SESSION['power'] = $fetch_password[$i][2];
            $_SESSION['login'] = 'true';
            header('location:../controller/' . $pages_controller[1]);
            exit;
        }
    }
    $_SESSION['login'] = 'false';
    header('Location:../view/');
    exit;

}else{
    header('Location:../view/');
    exit;
}