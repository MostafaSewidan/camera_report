

<?php
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
?>

<div class="form ">
    <center>


        <form class="md-form" method="post" action = '../controller/<?= $pages_controller['searchformcontroller']?>'>


            <SELECT class="select" name="DVR" required>
                <option>DVR</option>
                <?php
                for($i = 0; $i < count($DVR_fetch);$i++) {
                    ?>
                    <option><?= $DVR_fetch[$i][0] ?></option>
                    <?php
                }
                ?>

            </SELECT>




            <SELECT class="select" name="eraa" required>
                <option>المنطقة</option>
                <?php
                for($i = 0; $i < count($erea_fetch);$i++) {
                    ?>
                    <option><?= $erea_fetch[$i][0] ?></option>
                    <?php
                }
                ?>
            </SELECT>


            <table>


                <tr>
                    <td>
                        <SELECT class="select"  name="watchman_name"
                                style="     text-transform: none;
                                                border-radius: 5px;
                                                padding: 4px 30px 4px 30px;
                                                margin: 8px 50px 22px 18px;
                                                color: #5f6f81;
                                                width: 94%;" >
                            <option> الكل </option>
                            <?php
                            for($i = 0; $i < count($watcher_name_fetch);$i++) {
                                ?>
                                <option><?= $watcher_name_fetch[$i][0] ?></option>
                                <?php
                            }
                            ?>
                        </SELECT>
                    </td>
                    <td>
                        اسم المراقب
                    </td>
                </tr>


                <tr>
                    <td>
                        <SELECT class="select"  name="accident_name"
                                style="     text-transform: none;
                                                border-radius: 5px;
                                                padding: 4px 30px 4px 30px;
                                                margin: 8px 50px 22px 18px;
                                                color: #5f6f81;
                                                width: 94%;">
                            <option> الكل </option>
                            <?php
                            for($i = 0; $i < count($accident_name_fetch);$i++) {
                                ?>
                                <option><?= $accident_name_fetch[$i][0] ?></option>
                                <?php
                            }
                            ?>
                        </SELECT>
                    </td>
                    <td>
                        اسم مسبب الحادث
                    </td>
                </tr>

                <tr>
                    <td>
                        <input style="padding-left: 19%;" type="date" name="accident_date" autocomplete="off" placeholder="2019-04-25" >
                    </td>
                    <td>
                        تاريخ الحادث
                    </td>
                </tr>

                <tr>
                    <td colspan="2"><h4> :الفتره الزمنية</h4></td>
                </tr>
                <tr>
                    <td>
                        <input style="padding-left: 19%;"  type="date"  autocomplete="off" name="date_from">
                    </td>
                    <td>
                        من
                    </td>
                </tr>
                <tr>
                    <td>
                        <input style="padding-left: 19%;"  type="date"  autocomplete="off" name="date_to">
                    </td>
                    <td>
                       الي
                    </td>
                </tr>

            </table>

            <input  class="btn btn-info" style="    margin-top: 27px;
    font-weight: bolder;
    font-size: 27px;
    padding: 1% 7% 1% 7%;" type="submit" value="بحث">

        </form>
    </center>
</div>