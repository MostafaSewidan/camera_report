
<?php
session_start();
require_once '../model/conection.php';
require_once '../controller/pages.php';


?>
<div class="container">
    <ul id="gn-menu" class="gn-menu-main">
        <li class="gn-trigger">
            <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
            <nav class="gn-menu-wrapper">
                <div class="gn-scroller">
                    <ul class="gn-menu">
                        <li style="text-align: center">
                            <a href="../view/<?= $pages_view['search'];?>"
                               style="font-family: 'Droid Arabic Kufi'"> البحث</a>
                        </li>
                        <li style="text-align: center">
                            <a href="../view/<?= $pages_view[5];?>?action=today"
                                    style="font-family: 'Droid Arabic Kufi'">  تقارير اليوم</a>
                        </li>
                        <li  style="text-align: center">
                            <a href="../view/<?= $pages_view[5];?>?action=yesterday"
                               style="font-family: 'Droid Arabic Kufi'">  تقارير الامس</a>
                        </li>
                        <li style="text-align: center">
                            <a  href="../view/<?= $pages_view[5];?>?action=all"
                                style="font-family: 'Droid Arabic Kufi'"> كل التقارير</a>
                        </li>
                        <?php
                        if(!empty($_SESSION['power']) &&  $_SESSION['power'] == 'manager' )
                        {?>
                            <li style="text-align: center">
                                <a  href="../view/<?= $pages_view['manager'];?>?action_manager=editwatchman"
                                    style="font-family: 'Droid Arabic Kufi'">المراقبين</a>
                            </li>
                        <?php }?>
                        <?php
                        if(!empty($_SESSION['power']) && ($_SESSION['power'] == 'admin' || $_SESSION['power'] == 'manager' ))
                        {?>

                        <div style="
                                border-top: solid 1px #c6d0da;
                        ">
                            <li style="text-align: center">
                                <a  style="font-family: 'Droid Arabic Kufi'" id="categore"> تغيير كلمات المرور</a>
                            </li>
                            <div class="list-categore">
                                <li style="text-align: center">
                                <a href="editpass.php?user=watchman" style="font-family: 'Droid Arabic Kufi'">المراقبين</a>
                                </li>
                                <li style="text-align: center">
                                    <a href="editpass.php?user=manager" style="font-family: 'Droid Arabic Kufi'">المدير العام</a>
                                </li><li style="text-align: center">
                                    <a href="editpass.php?user=admin" style="font-family: 'Droid Arabic Kufi'">المدير التقني</a>
                                </li>

                            </div>
                        </div>
                           <?php }?>
                    </ul>
                </div><!-- /gn-scroller -->
            </nav>
        </li>
        <li class="color"><a href="../view"><span style="font-family: 'Droid Arabic Kufi'">الصفحة الرئيسية</span></a></li>
        <li class="color"><a href="../controller/<?= $pages_controller[4]?>"><span style="font-family: 'Droid Arabic Kufi'">تسجيل الخروج</span></a></li>
    </ul>


</div><!-- /container -->
