<?php require_once '../controller/'.$pages_controller['admindeletecontroller'];?>


<div class="table_contener">

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


    <div class="div_table" style="float: left;width:43%">
        <table class="table" style="text-align: right">
            <thead class="thead-dark" style="
                background-color: #008cb5;
                color: white;
                text-align: right">

            <tr>


                <th scope="col" colspan="2" style="text-align: center">DVR</th>

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
                                href="../controller/<?=$pages_controller['admindeleteactioncontroller']?>?DVR_ID=<?=$DVR_fetch[$i][0]?>"
                                class="btn btn-info"
                                onclick="return confirm('DVR الرجاء تاكيد حذف ال');"
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
                if (empty($DVR_fetch ))
                {
                    ?>
                    <tr>
                        <td colspan="2" style="    text-align: center;
    color: white;
    background-color: #c13737;
    font-size: 25px;
    font-weight: bolder;">
                            لا يوجد DVR مسجلة للعرض
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>


    <div class="div_table " style="float: right;width:43%">
        <table class="table" style="text-align: right">
            <thead class="thead-dark" style="
                background-color: #008cb5;
                color: white;
                text-align: right">

            <tr>


                <th scope="col" colspan="2" style="text-align: center">المناطق</th>

            </tr>

            </thead>
            <tbody style="background-color: white">
            <?php
            for($i = 0; $i < count($erea_fetch); $i++) {
                ?>
                <tr>
                    <td style="    text-align: left;">
                        <a
                                style="background-color: #ce3333;"
                                href="../controller/<?=$pages_controller['admindeleteactioncontroller']?>?erea_ID=<?=$erea_fetch[$i][0]?>"
                                class="btn btn-info"
                                onclick="return confirm('الرجاء تاكيد حذف المنطقة');"
                        >
                            حذف</a>
                    </td>

                    <td style=" font-weight: 600;
    padding-top: 14px;">
                        <?= $erea_fetch[$i][1] ?>
                    </td>
                </tr>
                <?php
                if (empty($erea_fetch ))
                {
                    ?>
                    <tr>
                        <td colspan="2" style="    text-align: center;
    color: white;
    background-color: #c13737;
    font-size: 25px;
    font-weight: bolder;">
                            لا يوجد مناطق مسجلة للعرض
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>