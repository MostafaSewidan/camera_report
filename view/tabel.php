<?php

require_once '../controller/pages.php';
require_once '../controller/'.$pages_controller['tablecontroller'];?>

<table class="table" style="text-align: right">
    <thead class="thead-dark" style="
        background-color: #008cb5;
        color: white;
        text-align: right">
    <tr>
        <th scope="col" style="text-align: right"></th>
        <th scope="col" style="text-align: right">تاريخ كتابة التقرير</th>
        <th scope="col" style="text-align: right">تاريخ الحادث</th>
        <th scope="col" style="text-align: right">مسبب الحادث</th>
        <th scope="col" style="text-align: right">المراقب</th>
        <th scope="col" style="text-align: right">المنطقة</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if(!empty($reports_fetch))
    {
        if ($action === 'all') {
            for ($i = 0; $i < count($reports_fetch); $i++) {
                ?>
                <tr>
                    <th scope="row">

                        <?php
                        if($_SESSION['power'] == 'manager') {
                            ?>

                            <a
                                    style="    background-color: #ce3333;"
                                    href="../controller/<?=$pages_controller['managerdeletcontroller']?>?ID=<?=$reports_fetch[$i][0]?>&action=all" class="btn btn-info"
                                    onclick="return confirm('الرجاء تاكيد حذف التقرير');"
                            >
                                حذف
                            </a>
                            <?php
                        }
                            ?>
                        <a href="<?= $pages_view['reportdetail']; ?>?ID=<?= $reports_fetch[$i][0]; ?>"class="btn btn-info">
                            التفاصيل
                        </a>

                    </th>

                    <td style="    font-size: 16px;
    font-weight: 500;"><?= $reports_fetch[$i][5]; ?></td>
                    <td style="    font-size: 16px;
    font-weight: 500;"><?= $reports_fetch[$i][4]; ?></td>
                    <td><?= $reports_fetch[$i][7]; ?></td>
                    <td><?= $reports_fetch[$i][6]; ?></td>
                    <td><?= $reports_fetch[$i][3]; ?></td>
                </tr>
                <?php
            }
        }
        elseif ($action === 'today')
        {

            for ($i = 0; $i < count($reports_fetch); $i++)
            {
                if(check_date_today($reports_fetch[$i][5]) == true)
                {
                    $today_date_flag = 'true';

                ?>
                    <tr>
                        <th scope="row">

                            <?php
                            if($_SESSION['power'] == 'manager') {
                                ?>

                                <a
                                        style="    background-color: #ce3333;"
                                        href="../controller/<?=$pages_controller['managerdeletcontroller']?>?ID=<?=$reports_fetch[$i][0]?>&action=today" class="btn btn-info"
                                        class="btn btn-info"
                                        onclick="return confirm('الرجاء تاكيد حذف التقرير');"
                                >
                                    حذف
                                </a>
                                <?php
                            }
                            ?>

                            <a href="<?= $pages_view['reportdetail']; ?>?ID=<?= $reports_fetch[$i][0]; ?>"
                                           class="btn btn-info">التفاصيل</a>

                        </th>
                        <td style="    font-size: 16px;
    font-weight: 500;"><?= $reports_fetch[$i][5]; ?></td>
                        <td style="    font-size: 16px;
    font-weight: 500;"><?= $reports_fetch[$i][4]; ?></td>
                        <td><?= $reports_fetch[$i][7]; ?></td>
                        <td><?= $reports_fetch[$i][6]; ?></td>
                        <td><?= $reports_fetch[$i][3]; ?></td>
                    </tr>
                <?php
                }
            }
            if($today_date_flag == 'false')
            {
                ?>
                <tr>
                    <td colspan="6" style="    text-align: center;
    color: white;
    background-color: #c13737;
    font-size: 25px;
    font-weight: bolder;">
                        لا يوجد تقارير مسجلة للعرض
                    </td>
                </tr>
                <?php
            }
        }
        elseif ($action == 'yesterday')
        {
            for ($i = 0; $i < count($reports_fetch); $i++)
            {
                if(check_date_yesterday($reports_fetch[$i][5]) == true)
                {
                    $yesterday_date_flag = 'true';

                    ?>
                    <tr>
                        <th scope="row">

                            <?php
                            if($_SESSION['power'] == 'manager') {
                                ?>

                                <a
                                        style="    background-color: #ce3333;"
                                        href="../controller/<?=$pages_controller['managerdeletcontroller']?>?ID=<?=$reports_fetch[$i][0]?>&action=yesterday" class="btn btn-info"
                                        sclass="btn btn-info"
                                        onclick="return confirm('الرجاء تاكيد حذف التقرير');"
                                >
                                    حذف
                                </a>
                                <?php
                            }
                            ?>

                            <a href="<?= $pages_view['reportdetail']; ?>?ID=<?= $reports_fetch[$i][0]; ?>"
                                           class="btn btn-info">التفاصيل</a>

                        </th>
                        <td style="    font-size: 16px;
    font-weight: 500;"><?= $reports_fetch[$i][5]; ?></td>
                        <td style="    font-size: 16px;
    font-weight: 500;"><?= $reports_fetch[$i][4]; ?></td>
                        <td><?= $reports_fetch[$i][7]; ?></td>
                        <td><?= $reports_fetch[$i][6]; ?></td>
                        <td><?= $reports_fetch[$i][3]; ?></td>
                    </tr>
                    <?php
                }
            }
            if($yesterday_date_flag == 'false')
            {
                ?>
                <tr>
                    <td colspan="6" style="    text-align: center;
    color: white;
    background-color: #c13737;
    font-size: 25px;
    font-weight: bolder;">
                        لا يوجد تقارير مسجلة للعرض
                    </td>
                </tr>
                <?php
            }
        }
        elseif ($action === 'search') {
            for ($i = 0; $i < count($reports_fetch); $i++) {
                ?>
                <tr>
                    <th scope="row">

                        <?php
                        if($_SESSION['power'] == 'manager') {
                            ?>

                            <a
                                    style="    background-color: #ce3333;"
                                    href="../controller/<?=$pages_controller['managerdeletcontroller']?>?ID=<?=$reports_fetch[$i][0]?>&action=search" class="btn btn-info"
                                    onclick="return confirm('الرجاء تاكيد حذف التقرير');"
                            >
                                حذف
                            </a>
                            <?php
                        }
                        ?>
                        <a href="<?= $pages_view['reportdetail']; ?>?ID=<?= $reports_fetch[$i][0]; ?>"class="btn btn-info">
                            التفاصيل
                        </a>

                    </th>

                    <td style="    font-size: 16px;
    font-weight: 500;"><?= $reports_fetch[$i][5]; ?></td>
                    <td style="    font-size: 16px;
    font-weight: 500;"><?= $reports_fetch[$i][4]; ?></td>
                    <td><?= $reports_fetch[$i][7]; ?></td>
                    <td><?= $reports_fetch[$i][6]; ?></td>
                    <td><?= $reports_fetch[$i][3]; ?></td>
                </tr>
                <?php
            }
        }
    }

    else
        {
        ?>
        <tr>
            <td colspan="6" style="    text-align: center;
    color: white;
    background-color: #c13737;
    font-size: 25px;
    font-weight: bolder;">
                لا يوجد تقارير مسجلة للعرض
            </td>
        </tr>
    <?php
        }
        ?>
    </tbody>
</table>