<?php


$today_date_flag = 'false';
$yesterday_date_flag = 'false';

function str_secure ($string)
{
    $string = mb_strtolower(filter_var($string ,FILTER_SANITIZE_STRING ));
    $string = trim($string);
    return $string;
}


function int_secure ($int)
{
    $int = filter_var($int ,FILTER_SANITIZE_NUMBER_INT);
    return $int;
}

function date_input ($date)
{
    $date = explode('t',$date);
    $time = explode(':',$date[1]);
    if($time[0] > 12)
    {
        $time[0] = $time[0] - 12;
        $time[0] = '0'. $time[0];
        $time_update = implode(':',$time);
        $date_update = $date[0] . ' / ' . $time_update . ' PM';
        return $date_update;
    }
    $date_update = implode(' / ' , $date) . ' AM' ;
    return $date_update;

}

function search_date ($date)
{
    $date = explode('t',$date);

    $date_update = trim($date[0]);

    return $date_update;

}

function check_date_today ($record_date)
{
    $today_date = date('Y-m-d  / h:i A');
    $today_date = explode('/' ,$today_date);
    $record_date = explode('/' ,$record_date);
    if ($today_date[0] === $record_date[0])
    {
        return true;
    }
    else{
        return false;
    }
}

function check_date_yesterday ($record_date)
{
    $yesterday_date = date('Y-m-d  / h:i A',strtotime("-1 days"));
    $yesterday_date = explode('/' ,$yesterday_date);
    $record_date = explode('/' ,$record_date);
    if (trim($yesterday_date[0]) === trim($record_date[0]))
    {
        return true;
    }
    else{
        return false;
    }
}

function edit_date($date_time , $date_input)
{
    $date_time = explode('/',$date_time);
    $date = trim($date_time[0]);
    if($date_input == $date)
    {
        return true;
    }else
    {
        return false;
    }
}