<?php
/**
 * @var Laptop $laptop;
 */

use app\model\Laptop;
use app\model\Gyarto;

$nev="";

$gyarto = Gyarto::findOneById($laptop->getGyarto());
if(!empty($gyarto)) {
    $nev = $gyarto->getNev() . " " . $laptop->getNev();
}else
{
    $nev=$laptop->getNev();
}

?>
<div class="col-md-6 col-sm-12">
    <table style="width:600px">
        <tr>

            <td colspan="2" style="background-color:deepskyblue ;font-weight: bold">
                <p style="font-size: 40px;"><?=$nev?>
                </p>
            </td>


        </tr>
        <tr>
            <td>
                <strong>Processzor</strong>
            </td>
            <td>
                <?= $laptop->getProcessor()?>
            </td>

        </tr>
        <tr>
            <td>
                <strong>Memória</strong>
            </td>
            <td>
                <?= $laptop->getMemoria()?>
            </td>

        </tr>
        <tr>
            <td>
                <strong>Videókártya</strong>
            </td>
            <td>
                <?= $laptop->getVideokartya()?>
            </td>

        </tr>
        <tr>
            <td>
                <strong> Háttértár<strong>
            </td>
            <td>
                C:\<?= $laptop->getHattertar()?><br>

                D:\<?php if($laptop->getHattertar2()=="e GB e"||$laptop->getHattertar2()=="e"||is_null($laptop->getHattertar2())){echo( "Nincs"); }else{echo($laptop->getHattertar2());}?>
            </td>

        </tr>
        <tr>
            <td>
                <strong>Operációs Rendszer:</strong>
            </td>
            <td>
                <?= $laptop->getoprendszer()?>
            </td>

        </tr>
        <tr>
            <td>
                <strong>Optikai meghajtó</strong>
            </td>
            <td>
                <?= $laptop->getOptikaimeghajto()?>
            </td>

        </tr>
        <tr>
            <td>
                <strong> Csatlakozók</strong>
            </td>
            <td>
                <?php $usba=$laptop->getUsba();if( $usba =="Van"){?>Usb<?php }?>
                <?php $usbc=$laptop->getUsbc();if( $usbc =="Van"){?>,Usb-C<?php }?>
                <?php $hdmi=$laptop->getHdmi();if( $hdmi =="Van"){?>,HDMI<?php }?>
                <?php $vga=$laptop->getVga();if( $vga =="Van"){?>,VGA<?php }?>
                <?php $dvid=$laptop->getDvid();if( $dvid =="Van"){?>,DVID<?php }?>
                <?php $display=$laptop->getDisplay();if( $display =="Van"){?>,DisplayPort<?php }?>
                <?php $rj=$laptop->getRj45();if( $rj =="Van"){?>,RJ-45<?php }?>
                <?php $fullhalgato=$laptop->getFullhalgato();if( $fullhalgato =="Van"){?>,Füllhallgató<?php }?>
                <?php $mikorofon=$laptop->getMikrofon();if( $vga =="Van"){?>,Mikrofon<?php }?>
            </td>

        </tr>
        <tr>
            <td>
                <strong>Hibák</strong>
            </td>
            <td>
                <?= $laptop->getHiba()?>
            </td>

        </tr>
        <tr>
            <td>
                <strong>Garancia</strong>
            </td>
            <td>
                <?= $laptop->getGarancia()?>
            </td>

        </tr>

        <tr>
            <td colspan="2">
                <p style="color:forestgreen;text-align: left;font-weight: bold;font-size: 50px;">PiCi Ár: </p><br><p style="color:forestgreen;text-align: center;font-weight: bold;font-size: 60px;"><?= number_format($laptop->getAr(),0,".",".")?>&nbsp;Ft
                    <img src="./img/picishop.png" style="width:300px; position: absolute; top:560px; left:270px;"
            </td>


        </tr>


    </table>
</div>
