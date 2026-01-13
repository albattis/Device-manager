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

function processorKep($pro)
{
    $proc=explode(" ",$pro);


    return $proc[0];
}


?>

<style>


h1{
    font-family: 'Roboto Black';
    
}
table
{
    font-size: 20px;

}
.roboto
{
    font-family: 'Roboto Black';
    font-size: 25px;
}

</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
    <table style="width:700px">
        <tr>

            <td colspan="2" style="text-align:center; color: #134a97;border-radius:20px 20px 0px 0px; background-color:deepskyblue ;font-weight: bold; ">
                <h1 style="font-size: 60px;"><?=$nev?></h1>

            </td>
        <tr>
            <td colspan="2">
                <?php if(!empty($gyarto)){ ?>
                    <img src="<?=$gyarto->getKep()?>" style="margin-right:100px;width:30%; display:inline-block;"><?php ;}?> <?php $e=$pc->getProcessor(); $A=lcfirst(processorKep($e)); ?>
                <img src="<?="img/windows/". $A .".png"?>" style="margin-right:100px;width:25%; display:inline-block;margin:0px 5px 0px 5px">


        </tr>

        </tr>
        <tr>
            <td class="roboto">
                <strong>Processzor</strong>
            </td>
            <td>
                <?= $pc->getProcessor()?>
            </td>

        </tr>
        <tr>
            <td class="roboto">
                <strong>Memória</strong>
            </td>
            <td>
                <?= $pc->getMemoria()?>
            </td>

        </tr>
        <tr>
            <td class="roboto">
                <strong>Videókártya</strong>
            </td>
            <td>
                <?= $pc->getVideokartya()?>
            </td>

        </tr>
        <tr>
            <td class="roboto">
                <strong> Háttértár<strong>
            </td>
            <td>
                C:\<?= $pc->getHattertar()?><br>

                </td>

        </tr>
        <tr>
            <td class="roboto">
                <strong>Operációs Rendszer:</strong>
            </td>
            <td>
                <?= $pc->getoprendszer()?> elérhető hozzá.
            </td>

        </tr>
        <tr>
            <td class="roboto">
                <strong>Optikai meghajtó</strong>
            </td>
            <td>
                
                <?php if($pc->getOptikaimeghajto()=="Nincs")
                {
                    echo("Optikai meghajtó elérhetö hozztá");
                }else
                {
                    echo($pc->getOptikaimeghajto());
                }
                ?>
            </td>

        </tr>
        <tr>
            <td class="roboto">
                <strong> Csatlakozók</strong>
            </td>
            <td>
                <?php $usba=$pc->getUsba();if( $usba =="Van"){?>USB<?php }?>
                <?php $usbc=$pc->getUsbc();if( $usbc =="Van"){?>, USB-C<?php }?>
                <?php $hdmi=$pc->getHdmi();if( $hdmi =="Van"){?>, HDMI<?php }?>
                <?php $vga=$pc->getVga();if( $vga =="Van"){?>, VGA<?php }?>
                <?php $dvid=$pc->getDvid();if( $dvid =="Van"){?>, DVID<?php }?>
                <?php $display=$pc->getDisplay();if( $display =="Van"){?>, DisplayPort<?php }?>
                <?php $rj=$pc->getRj45();if( $rj =="Van"){?>, RJ-45<?php }?>
                <?php $fullhalgato=$pc->getFullhalgato();if( $fullhalgato =="Van"){?>, Füllhallgató<?php }?>
                <?php $mikorofon=$pc->getMikrofon();if( $vga =="Van"){?>, Mikrofon<?php }?>
            </td>

        </tr>
        <tr>
            <td class="roboto">
                <strong>Hibák</strong>
            </td>
            <td>
                <?= $pc->getHiba()?>
            </td>

        </tr>
        <tr>
            <td class="roboto">
                <strong>Garancia</strong>
            </td>
            <td>
                <?php if($pc->getGarancia()=="Van")
                {
                    echo("12 hónap PiCi Shop garancia");
                }else
                {
                    echo($pc->getGarancia());
                }
                ?>
            </td>

        </tr>

        <tr style="border:0px;">
            <td style="border:0px;"><p style="color:forestgreen;text-align: center;font-weight: bold;font-size: 50px;">Jelnelegi ár : </p></td>
            <td style="border-bottom: 0px;text-align: right;"><img src="./img/minta.png" style="width:50%" alt=""></td>
        </tr>

        <tr><td colspan="2">
                <p class="laptopar robotofont"><strong><?= number_format($pc->getAr(),0,".",".")?></strong>&nbsp;Ft
                </p>
        </tr>

    </table>
    </div>


        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <a href="http://localhost/insert/index.php?controller=Computer&action=Pc&id=<?=$pc->getid()?>"><img src="./img/back.png" style="margin-left:100px; margin-top:20px;width:100px; height: 100px;"></a>
                </div>
                <div class="col-3">
                    <button style="border:0px; margin-left:100px; " onclick="window.print()"><img src="./img/print.png" style="display:inline-block;  width:100px; height: 100px;"></button>
                </div>
            </div></div>