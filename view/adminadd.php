
<?php
if(!empty($_SESSION['power']) && $_SESSION['power'] == 'admin')
{

}else
{
    header('location:../view');
    exit;
}
?>

<div class="form">
    <center>

        <div  style="
        <?php
        if(!empty($_SESSION['add_sms'])) {
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
            if(!empty($_SESSION['add_sms'])) {

                echo $_SESSION['add_sms'];
                $_SESSION['add_sms'] = '';
            }
            ?>
        </div>


        <div  style="
        <?php
        if(!empty($_SESSION['add_error'])) {
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
            if(!empty($_SESSION['add_error'])) {

                echo $_SESSION['add_error'];
                $_SESSION['add_error'] = '';
            }
            ?>
        </div>


        <table>

            <form method="post" action = "../controller/<?= $pages_controller['adminaddcontroller']?>">
                <tr>

                    <td>
                        <input type="text"  autocomplete="off" name="add_erea">
                    </td>
                    <td>
                        اضافة منطقة
                    </td>
                </tr>
                <tr>

                    <td>
                        <input type="number"  autocomplete="off" name="add_dvr">
                    </td>
                    <td>
                        DVR اضافة رقم
                    </td>
                </tr>


                <tr>
                    <td colspan="2">
                        <center>
                            <input style="    margin-top: 27px;
    font-weight: bolder;
    font-size: 27px;
    padding: 1% 7% 1% 7%;" class="btn btn-info" type="submit" value="اضافة">
                        </center>
                    </td>
                </tr>
            </form>

        </table>

    </center>
</div>