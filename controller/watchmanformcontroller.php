
<?php
require_once 'pages.php';
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{

    $DVR    = $_POST["dvr"];
    $camera = $_POST["camera"];
    $erea   = $_POST["erea"];

    if(empty($DVR) || empty($erea) || empty($camera) )
    {
        $_SESSION['form_error'] = 'يجب اختيار الكاميرا والمنطقة و ديفيار';
        header('Location:../view');
        exit;
    }

    $accident_date = str_secure($_POST["date"]);
    $accident_date1 = date_input($accident_date);
    $accident_date2 = search_date($accident_date);
    $watcher_name = str_secure($_POST["watchername"]);
    $accident_name = str_secure($_POST["accident_name"]);
    $accident_description = str_secure($_POST["accident_description"]);
    $action  = str_secure($_POST["action"]);
    $record_date = date('Y-m-d  / h:i A');


    $DB_accidant_name = $conn->query('SELECT `name` FROM `acedant` WHERE  `acedant`.`name`="'.$accident_name.'"');
    $DB_accidant_name_fetch = $DB_accidant_name->fetchAll(PDO::FETCH_BOTH);
    if(!empty($DB_accidant_name_fetch)) {

        $conn->exec
        (
            'INSERT INTO `report`
                      (
                       `DVR`,
                        `camera`,
                         `eraa`,
                          `accident_date`,
                           `record_date`,
                            `watchman_name`,
                             `accident_name`,
                             `accident_description`,
                              `action`,
                               `img`,
                                `vedio`,
                                `search_date`
                        )
                    VALUES
                        (
                        "' . $DVR . '",
                        "' . $camera . '",
                        "' . $erea . '",
                        "' . $accident_date1 . '",
                        "' . $record_date . '",
                        "' . $watcher_name . '",
                        "' . $accident_name . '",
                        "' . $accident_description . '",
                        "' . $action . '",
                        "' . $img . '",
                        "' . $vedio . '",
                        "' . $accident_date2 . '"
                          )
    ');
    }elseif (empty($DB_accidant_name_fetch))
    {
        $conn->exec
        (
            'INSERT INTO `report`
                      (
                       `DVR`,
                        `camera`,
                         `eraa`,
                          `accident_date`,
                           `record_date`,
                            `watchman_name`,
                             `accident_name`,
                             `accident_description`,
                              `action`,
                               `img`,
                                `vedio`,
                                `search_date`
                        )
                    VALUES
                        (
                        "' . $DVR . '",
                        "' . $camera . '",
                        "' . $erea . '",
                        "' . $accident_date1 . '",
                        "' . $record_date . '",
                        "' . $watcher_name . '",
                        "' . $accident_name . '",
                        "' . $accident_description . '",
                        "' . $action . '",
                        "' . $img . '",
                        "' . $vedio . '",
                        "' . $accident_date2 . '"
                          )
    ');
        $conn->exec('INSERT INTO `acedant` (`name`) VALUES ("'.$accident_name.'")');
    }

    $_SESSION['form_succed'] = "لقد تم حفظ التقرير بنجاح";
    header('Location:../view');
    exit;
}
header('Location:../view');
exit;

