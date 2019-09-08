

<?php
if(!empty($_SESSION['power']) && $_SESSION['power'] == 'manager')
{

}else
{
    header('location:../view');
    exit;
}
$DVR = $conn->query('SELECT * FROM watcher');
$DVR_fetch = $DVR->fetchAll(PDO::FETCH_BOTH);

?>








<div class="table_contener" style="    margin-left: 22%;">
    <center>

        <div  style="
        <?php
        if(!empty($_SESSION['delete_sms'])) {
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
            margin-top: 10% ;
            " >
            <?php
            if(!empty($_SESSION['delete_sms'])) {

                echo $_SESSION['delete_sms'];
                $_SESSION['delete_sms'] = '';
            }
            ?>
        </div>

    </center>


    <div class="div_table" style="width: 86%;">
        <table class="table" style="text-align: right">
            <thead class="thead-dark" style="
                    background-color: #008cb5;
                    color: white;
                    text-align: right">

            <tr>


                <th scope="col" colspan="2" style="text-align: center">المراقبين</th>

            </tr>

            </thead>
            <tbody style="background-color: white">
            <?php
            for($i = 0; $i < count($DVR_fetch); $i++) {
                ?>
                <tr>
                    <td style="    text-align: left;">
                        <a
                            style="background-color: #ce3333;"
                            href="../controller/<?=$pages_controller['manager_watchman_deletecontroller']?>?watchman_ID=<?=$DVR_fetch[$i][0]?>"
                            class="btn btn-info"
                            onclick="return confirm('الرجاء تاكيد حذف الموظف :  <?= $DVR_fetch[$i][1] ?>');"
                        >
                            حذف
                        </a>
                    </td>

                    <td style=" font-weight: 600;
        padding-top: 14px;">
                        <?= $DVR_fetch[$i][1] ?>
                    </td>
                </tr>
                <?php
            }
            if (empty($DVR_fetch ))
            {
                ?>
                <tr>
                    <td colspan="2" style="    text-align: center;
    color: white;
    background-color: #c13737;
    font-size: 25px;
    font-weight: bolder;">
                        لا يوجد مراقبين مسجلين للعرض
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>