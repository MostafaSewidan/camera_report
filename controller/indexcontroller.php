<?php
session_start();

if(!empty($_SESSION['login']) && $_SESSION['login'] == 'false')
{
    $_SESSION['display'] = 'block';

}
elseif (!empty($_SESSION['login']) && $_SESSION['login'] == 'true')
{
    if(!empty($_SESSION['power']) && $_SESSION['power'] == 'admin')
    {
        header('location:../view/' . $pages_view[1]);
        exit;
    }elseif (!empty($_SESSION['power']) && $_SESSION['power'] == 'watchman')
    {
        header('location:../view/' . $pages_view[3]);
        exit;
    }
    elseif (!empty($_SESSION['power']) && $_SESSION['power'] == 'manager')
    {
        header('location:../view/' . $pages_view['manager']);
        exit;
    }
}
else
{
    $_SESSION['display'] = 'none';
}

