<?php
/**
 * @var Computer $pc;
 */

use app\model\Computer;
use app\model\Gyarto;

$nev="";

$gyarto = Gyarto::findOneById($pc->getGyarto());
if(!empty($gyarto)) {
    $nev = $gyarto->getNev() . " " . $pc->getNev();
}else
{
    $nev=$pc->getNev();
}

?>
<div class="col-md-6 col-sm-12">
    <table style="width:600px">
        <tr>

            <td colspan="2" style="text-align:center;color:white;background-color:deepskyblue ;font-weight: bold">
                <p style="font-size: 40px;"><?=$nev?>
                </p>
            </td>


        </tr>
        <tr>
            <td>
                <strong>Processzor</strong>
            </td>
            <td>
                <?= $pc->getProcessor()?>
            </td>

        </tr>
        <tr>
            <td>
                <strong>Memória</strong>
            </td>
            <td>
                <?= $pc->getMemoria()?>
            </td>

        </tr>
        <tr>
            <td>
                <strong>Videókártya</strong>
            </td>
            <td>
                <?= $pc->getVideokartya()?>
            </td>

        </tr>
        <tr>
            <td>
                <strong> Háttértár<strong>
            </td>
            <td>
                C:\<?= $pc->getHattertar()?><br>

                D:\<?php if($pc->getHattertar2()=="e GB e"||$pc->getHattertar2()=="e"||is_null($pc->getHattertar2())){echo( "Nincs"); }else{echo($pc->getHattertar2());}?>
            </td>

        </tr>
        <tr>
            <td>
                <strong>Operációs Rendszer:</strong>
            </td>
            <td>
                <?= $pc->getoprendszer()?>
            </td>

        </tr>
        <tr>
            <td>
                <strong>Optikai meghajtó</strong>
            </td>
            <td>
                <?= $pc->getOptikaimeghajto()?>
            </td>

        </tr>
        <tr>
            <td>
                <strong> Csatlakozók</strong>
            </td>
            <td>
                <?php $usba=$pc->getUsba();if( $usba =="Van"){?>Usb<?php }?>
                <?php $usbc=$pc->getUsbc();if( $usbc =="Van"){?>,Usb-C<?php }?>
                <?php $hdmi=$pc->getHdmi();if( $hdmi =="Van"){?>,HDMI<?php }?>
                <?php $vga=$pc->getVga();if( $vga =="Van"){?>,VGA<?php }?>
                <?php $dvid=$pc->getDvid();if( $dvid =="Van"){?>,DVID<?php }?>
                <?php $display=$pc->getDisplay();if( $display =="Van"){?>,DisplayPort<?php }?>
                <?php $rj=$pc->getRj45();if( $rj =="Van"){?>,RJ-45<?php }?>
                <?php $fullhalgato=$pc->getFullhalgato();if( $fullhalgato =="Van"){?>,Füllhallgató<?php }?>
                <?php $mikorofon=$pc->getMikrofon();if( $vga =="Van"){?>,Mikrofon<?php }?>
            </td>

        </tr>
        <tr>
            <td>
                <strong>Hibák</strong>
            </td>
            <td>
                <?= $pc->getHiba()?>
            </td>

        </tr>
        <tr>
            <td>
                <strong>Garancia</strong>
            </td>
            <td>
                <?= $pc->getGarancia()?>
            </td>

        </tr>

        <tr>
            <td colspan="2">
                <p style="color:forestgreen;text-align: left;font-weight: bold;font-size: 50px;">PiCi Ár: </p><br><p style="color:forestgreen;text-align: center;font-weight: bold;font-size: 60px;"><?= number_format($pc->getAr(),0,".",".")?>&nbsp;Ft
                    <img src="./img/picishop.png" style="width:300px; position: absolute; top:560px; left:270px;"
            </td>


        </tr>


    </table>
</div>
