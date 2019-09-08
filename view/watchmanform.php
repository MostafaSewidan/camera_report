

<?php
session_start();
if(!empty($_SESSION['power']) && $_SESSION['power'] == 'watchman')
{

}else
{
    header('location:../view');
    exit;
}
?>

<div class="form ">
    <center>


        <div  style="
        <?php
        if(!empty($_SESSION['form_error'])) {
            ?>
            display: block;

            <?php
        }else{
            ?>
            display: none;
            <?php
        }
        ?>

            font-family: 'Droid Arabic Kufi';
            color: white;
            background-color: #c13737;
            text-align: center;
            padding: 15px 0px 16px 0px;
            margin-bottom: 38px;
            border-radius: 8px;
            width: 50%;
            font-weight: bolder;
            font-size: 19px;
            ">
            <?php
            if(!empty($_SESSION['form_error'])) {

                echo $_SESSION['form_error'];
                $_SESSION['form_error'] = '';
            }
            ?>
        </div>
        <div  style="
        <?php
        if(!empty($_SESSION['form_succed'])) {
            ?>
            display: block;

            <?php
        }else{
            ?>
            display: none;
            <?php
        }
        ?>

            font-family: 'Droid Arabic Kufi';
            color: white;
            background-color: #49c14c;
            text-align: center;
            padding: 15px 0px 16px 0px;
            margin-bottom: 38px;
            border-radius: 8px;
            width: 50%;
            font-weight: bolder;
            font-size: 19px;
            ">
            <?php
            if(!empty($_SESSION['form_succed'])) {

                echo $_SESSION['form_succed'];
                $_SESSION['form_succed'] = '';
            }
            ?>
        </div>


        <form class="md-form" method="post" action = '../controller/<?= $pages_controller['watchmanformcontroller']?>'>


            <SELECT class="select" name="dvr" required>
                <option disabled selected>DVR</option>
                <?php
                for($i = 0; $i < count($DVR_fetch);$i++) {
                    ?>
                    <option><?= $DVR_fetch[$i][0] ?></option>
                    <?php
                }
                ?>

            </SELECT>


            <SELECT class="select" name="camera" required>
                <option disabled selected>CAMERA</option>
                <?php
                for($i = 1; $i <= 30 ;$i++) {
                    ?>
                    <option>camera   <?= $i ?></option>
                    <?php
                }
                ?>
            </SELECT>


            <SELECT class="select" name="erea" required>
                <option disabled selected>المنطقة</option>
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
                        <input style="padding-left: 19%;" type="datetime-local" name="date" autocomplete="off" required>
                    </td>
                    <td>
                        وقت وتاريخ الحادث
                    </td>
                </tr>


                <tr>
                    <td>
                        <SELECT class="select"  name="watchername"
                                style="     text-transform: none;
                                                border-radius: 5px;
                                                padding: 4px 30px 4px 30px;
                                                margin: 8px 50px 22px 18px;
                                                color: #5f6f81;
                                                width: 94%;" required>
                            <option disabled selected>  </option>
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
                        <input type="text" name = 'accident_name' autocomplete="off" required>
                    </td>
                    <td>
                        اسم مسبب الحادث
                    </td>
                </tr>


                <tr>
                    <td colspan="2">وصف المشكلة</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <textarea style="direction: rtl" rows="5" cols="45" name="accident_description" required autocomplete="off">

                        </textarea>
                    </td>
                </tr>


                <tr>
                    <td colspan="2">الاجراء المتخذ والملاحظات</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <textarea style="direction: rtl" rows="5" cols="45" required name="action" autocomplete="off">

                        </textarea>
                    </td>
                </tr>


                <tr>

                    <td>
                        <input type="file" class="custom-file-input" id="customFile">
                    </td>

                    <td>

                        <input class="btn btn-danger" type="file" />

                    </td>

                </tr>


            </table>

            <input  class="btn btn-info" style="       margin-top: 27px;
    font-weight: bolder;
    font-size: 27px;
    padding: 1% 7% 1% 7%;" type="submit" value="تسجيل التقرير">

        </form>
    </center>
</div>