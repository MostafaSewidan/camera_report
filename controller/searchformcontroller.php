<?php
require_once 'pages.php';
session_start();
if(!empty($_SESSION['power']) &&
    (
        $_SESSION['power'] == 'watchman' ||
        $_SESSION['power'] == 'admin' ||
        $_SESSION['power'] == 'manager')
)
{

}else
{
    header('location:../view');
    exit;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{


    $counter = 0 ;
    $counter2 = 0;
    $_POST['DVR'] = strtoupper(str_secure($_POST['DVR']));
    $_POST['eraa'] = str_secure($_POST['eraa']);
    $_POST['watchman_name'] = str_secure($_POST['watchman_name']);
    $_POST['accident_name'] = str_secure($_POST['accident_name']);
    $_POST['accident_date'] = str_secure($_POST['accident_date']);
    $_POST['date_from'] = str_secure($_POST['date_from']);
    $_POST['date_to'] = str_secure($_POST['date_to']);



    //check post DVR , erea , watchman name and accident  is posted or sum of thim

    if($_POST['DVR'] != 'DVR')
    {
        $post[$counter] = 'DVR';
        $post_data[$counter] = $_POST['DVR'];
        $counter++;
    }

    if($_POST['eraa'] != 'المنطقة')
    {
        $post[$counter] = 'eraa';
        $post_data[$counter] = $_POST['eraa'];
        $counter++;
    }

    if($_POST['watchman_name'] != 'الكل')
    {
        $post[$counter] = 'watchman_name';
        $post_data[$counter] = $_POST['watchman_name'];
        $counter++;
    }

    if($_POST['accident_name'] != 'الكل')
    {
        $post[$counter] = 'accident_name';
        $post_data[$counter] = $_POST['accident_name'];
        $counter++;
    }
    //**************************************************


    //check post date is posted or sum of thim

    if(!empty($_POST['accident_date']))
    {
        $postdate[$counter2] = 'accident_date';
        $postdate_data[$counter2] = $_POST['accident_date'];
        $counter2++;
    }
    if(!empty($_POST['date_from']))
    {
        $postdate[$counter2] = 'date_from';
        $postdate_data[$counter2] = $_POST['date_from'];
        $counter2++;
    }
    if(!empty($_POST['date_to']))
    {
        $postdate[$counter2] = 'date_to';
        $postdate_data[$counter2] = $_POST['date_to'];
        $counter2++;
    }
    //**********************************************************



    // where dates is empty and other posts is not

    if (!empty($post) && empty($postdate))
    {

        if(count($post) == 1)
        {
            $DB_data = $conn->query('SELECT * FROM `report` WHERE '.$post[0].'="'.$post_data[0].'" ORDER BY `report`.`search_date` DESC');
            $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

        }
        if(count($post) == 2)
        {
            $DB_data = $conn->query('SELECT * FROM `report` WHERE '.$post[0].'="'.$post_data[0].'" and '.$post[1].'="'.$post_data[1].'" ORDER BY `report`.`search_date` DESC');
            $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

        }
        if(count($post) == 3)
        {
            $DB_data = $conn->query('SELECT * FROM `report` WHERE '.$post[0].'="'.$post_data[0].'" and '.$post[1].'="'.$post_data[1].'" and '.$post[2].'="'.$post_data[2].'" ORDER BY `report`.`search_date` DESC');
            $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

        }
        if(count($post) == 4)
        {
            $DB_data = $conn->query('SELECT * FROM `report` WHERE '.$post[0].'="'.$post_data[0].'" and '.$post[1].'="'.$post_data[1].'" and '.$post[2].'="'.$post_data[2].'" and '.$post[3].'="'.$post_data[3].'" ORDER BY `report`.`search_date` DESC');
            $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

        }
    }
    //************************************************************


    // where the posts is empty and dates is not

    elseif (empty($post) && !empty($postdate))
    {

        if($postdate[0] == 'accident_date')
        {

            $DB_data = $conn->query('SELECT * FROM `report` WHERE search_date="'.$postdate_data[0].'" ORDER by search_date');
            $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

        }

        elseif($postdate[0] == 'date_from' && empty($postdate[1]))
        {

            $DB_data = $conn->query('SELECT * FROM `report` WHERE search_date>="'.$postdate_data[0].'" ORDER by search_date');
            $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

        }

        elseif($postdate[0] == 'date_to')
        {

            $DB_data = $conn->query('SELECT * FROM `report` WHERE search_date<="'.$postdate_data[0].'" ORDER by search_date');
            $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

        }

        elseif($postdate[0] == 'date_from' && $postdate[1] == 'date_to')
        {

            $DB_data = $conn->query('SELECT * FROM `report` WHERE search_date>="'.$postdate_data[0].'" and search_date<="'.$postdate_data[1].'" ORDER by search_date');
            $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

        }

    }
    //*****************************************************************


    // where the posts is empty and dates is not

    elseif (!empty($post) && !empty($postdate))
    {

        if($postdate[0] == 'accident_date')
        {

            if(count($post) == 1)
            {
                $DB_data = $conn->query('SELECT * FROM `report` WHERE '.$post[0].'="'.$post_data[0].'" and search_date="'.$postdate_data[0].'" ORDER by search_date');
                $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

            }
            if(count($post) == 2)
            {
                $DB_data = $conn->query('SELECT * FROM `report` WHERE '.$post[0].'="'.$post_data[0].'" and '.$post[1].'="'.$post_data[1].'" and search_date="'.$postdate_data[0].'" ORDER by search_date');
                $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

            }
            if(count($post) == 3)
            {
                $DB_data = $conn->query('SELECT * FROM `report` WHERE '.$post[0].'="'.$post_data[0].'" and '.$post[1].'="'.$post_data[1].'" and '.$post[2].'="'.$post_data[2].'" and search_date="'.$postdate_data[0].'" ORDER by search_date');
                $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

            }
            if(count($post) == 4)
            {
                $DB_data = $conn->query('SELECT * FROM `report` WHERE '.$post[0].'="'.$post_data[0].'" and '.$post[1].'="'.$post_data[1].'" and '.$post[2].'="'.$post_data[2].'" and '.$post[3].'="'.$post_data[3].'" and search_date="'.$postdate_data[0].'" ORDER by search_date');
                $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

            }

        }
        //-------- --------- --------- -------- ------- ------ -------//

        elseif($postdate[0] == 'date_from' && empty($postdate[1]))
        {
            if(count($post) == 1)
            {
                $DB_data = $conn->query('SELECT * FROM `report` WHERE '.$post[0].'="'.$post_data[0].'" and search_date>="'.$postdate_data[0].'" ORDER by search_date');
                $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

            }
            if(count($post) == 2)
            {
                $DB_data = $conn->query('SELECT * FROM `report` WHERE '.$post[0].'="'.$post_data[0].'" and '.$post[1].'="'.$post_data[1].'" and search_date>="'.$postdate_data[0].'" ORDER by search_date');
                $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

            }
            if(count($post) == 3)
            {
                $DB_data = $conn->query('SELECT * FROM `report` WHERE '.$post[0].'="'.$post_data[0].'" and '.$post[1].'="'.$post_data[1].'" and '.$post[2].'="'.$post_data[2].'" and search_date>="'.$postdate_data[0].'" ORDER by search_date');
                $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

            }
            if(count($post) == 4)
            {
                $DB_data = $conn->query('SELECT * FROM `report` WHERE '.$post[0].'="'.$post_data[0].'" and '.$post[1].'="'.$post_data[1].'" and '.$post[2].'="'.$post_data[2].'" and '.$post[3].'="'.$post_data[3].'" and search_date>="'.$postdate_data[0].'" ORDER by search_date');
                $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

            }

        }
        //-------- --------- --------- -------- ------- ------ -------//

        elseif($postdate[0] == 'date_to')
        {
            if(count($post) == 1)
            {
                $DB_data = $conn->query('SELECT * FROM `report` WHERE '.$post[0].'="'.$post_data[0].'" and search_date<="'.$postdate_data[0].'" ORDER by search_date');
                $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

            }
            if(count($post) == 2)
            {
                $DB_data = $conn->query('SELECT * FROM `report` WHERE '.$post[0].'="'.$post_data[0].'" and '.$post[1].'="'.$post_data[1].'" and search_date<="'.$postdate_data[0].'" ORDER by search_date');
                $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

            }
            if(count($post) == 3)
            {
                $DB_data = $conn->query('SELECT * FROM `report` WHERE '.$post[0].'="'.$post_data[0].'" and '.$post[1].'="'.$post_data[1].'" and '.$post[2].'="'.$post_data[2].'" and search_date<="'.$postdate_data[0].'" ORDER by search_date');
                $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

            }
            if(count($post) == 4)
            {
                $DB_data = $conn->query('SELECT * FROM `report` WHERE '.$post[0].'="'.$post_data[0].'" and '.$post[1].'="'.$post_data[1].'" and '.$post[2].'="'.$post_data[2].'" and '.$post[3].'="'.$post_data[3].'" and search_date<="'.$postdate_data[0].'" ORDER by search_date');
                $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

            }

        }
        //-------- --------- --------- -------- ------- ------ -------//

        elseif($postdate[0] == 'date_from' && $postdate[1] == 'date_to')
        {
            if(count($post) == 1)
            {
                $DB_data = $conn->query('SELECT * FROM `report` WHERE '.$post[0].'="'.$post_data[0].'" and search_date BETWEEN "'.$postdate_data[0].'" and "'.$postdate_data[1].'" ORDER by search_date');
                $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

            }
            if(count($post) == 2)
            {
                $DB_data = $conn->query('SELECT * FROM `report` WHERE '.$post[0].'="'.$post_data[0].'" and '.$post[1].'="'.$post_data[1].'" and search_date BETWEEN "'.$postdate_data[0].'" and "'.$postdate_data[1].'" ORDER by search_date');
                $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

            }
            if(count($post) == 3)
            {
                $DB_data = $conn->query('SELECT * FROM `report` WHERE '.$post[0].'="'.$post_data[0].'" and '.$post[1].'="'.$post_data[1].'" and '.$post[2].'="'.$post_data[2].'" and search_date BETWEEN "'.$postdate_data[0].'" and "'.$postdate_data[1].'" ORDER by search_date');
                $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

            }
            if(count($post) == 4)
            {
                $DB_data = $conn->query('SELECT * FROM `report` WHERE '.$post[0].'="'.$post_data[0].'" and '.$post[1].'="'.$post_data[1].'" and '.$post[2].'="'.$post_data[2].'" and '.$post[3].'="'.$post_data[3].'" and search_date BETWEEN "'.$postdate_data[0].'" and "'.$postdate_data[1].'" ORDER by search_date');
                $DB_data_fetch = $DB_data->fetchAll(PDO::FETCH_BOTH);

            }

        }
        //-------- --------- --------- -------- ------- ------ -------//

    }
    //**********************************************************************


    // where the posts and dates is empty

    elseif (empty($post) && empty($postdate))
    {
         header('location:../view/'.$pages_view[5].'?action=all');
         exit;
    }
    //**********************************************************************

    $_SESSION['$DB_data_fetch'] = $DB_data_fetch;

    header('location:../view/'.$pages_view[5].'?action=search');
    exit;

}
else
{
    header('location:../view');
    exit;
}
