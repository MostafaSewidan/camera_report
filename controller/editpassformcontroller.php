<?php
require_once 'pages.php';
session_start();
if(

    !empty($_SESSION['power']) &&
    (
        $_SESSION['power'] == 'admin' ||
        $_SESSION['power'] == 'manager'
    ))
{}else
{
    header('location:../view');
    exit;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['save'] = 'حفظ')
{
    $old = str_secure($_POST['old']);
    $new = str_secure($_POST['new']);
    $rnew = str_secure($_POST['rnew']);
    $action = str_secure($_POST['action']);

    $userlogin = $conn->query('SELECT * FROM `userlogin` WHERE power = "'.$action.'"');
    $userlogin_fetch = $userlogin->fetchAll(PDO::FETCH_BOTH);
   if(password_verify($old,$userlogin_fetch[0][1]))
   {

       if($new == $rnew)
       {

           $pass_conflect = $conn->query('SELECT password FROM `userlogin` ');
           $pass_conflect_fetch = $pass_conflect->fetchAll(PDO::FETCH_BOTH);

            for( $i = 0; $i < count($pass_conflect_fetch); $i++ )
            {
                if(password_verify($new,$pass_conflect_fetch[$i][0]))
                {
                    $_SESSION['changepass_error'] = 'كلمة المرور الجديدة غير متطابقة';
                    header('location:../view/'.$pages_view['editpass'].'?user='.$action.'');
                    exit;
                }
            }

            $new_pass = password_hash($new, PASSWORD_DEFAULT);
            $conn->exec('UPDATE `userlogin` SET `password` = "' . $new_pass . '" WHERE `userlogin`.`id` = "' . $userlogin_fetch[0][0] . '"');
            $_SESSION['changepass_done'] = 'تم تغيير كلمة المرور بنجاح';
            header('location:../view/' . $pages_view['editpass'] . '?user=' . $action . '');
            exit;

       }
       else
       {
           $_SESSION['changepass_error'] = 'كلمة المرور الجديدة غير متطابقة';
           header('location:../view/'.$pages_view['editpass'].'?user='.$action.'');
           exit;

       }

   }
   else
   {
       $_SESSION['changepass_error'] = 'كلمة المرور القدية خاطئة';
       header('location:../view/'.$pages_view['editpass'].'?user='.$action.'');
       exit;
   }

}