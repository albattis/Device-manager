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
    font-size: 25px;
    border-bottom: 1px solid black;
    font-family: 'Roboto Black';
}


</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
    <table style="width:700px">
        <tr>

            <td colspan="2" style="text-align:center; color: #134a97;border-radius:20px 20px 0px 0px; background-color:deepskyblue ;font-weight: bold; ">
                <h1><?=$nev?></h1>

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

                <?php if($pc->getHattertar2()=="e GB e"||$pc->getHattertar2()=="e"||is_null($pc->getHattertar2())){echo( "Nincs"); }else{?>D:\ <?php echo($pc->getHattertar2());}?>
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

        <tr style="border:0px;">
            <td style="border:0px;"><p style="color:forestgreen;text-align: left;font-weight: bold;font-size: 50px;">PiCi ár : </p></td>
            <td style="border:0px;"><img src="./img/picishop.png" style="width:300px;"</td>
        </tr>
        <tr><td colspan="2">
                <p style="color:forestgreen;text-align: right;font-weight: bolder ;font-size: 150px;"><strong><?= number_format($pc->getAr(),0,".",".")?></strong>&nbsp;Ft
                </p></td></tr>
        </table>
    </div>
        <div class="col-4">

    <?php if(!empty($gyarto)){ ?> <img src="<?=$gyarto->getKep()?>" style="width:200px;position: absolute;top: 300px; left:0px;"><?php ;}?> <?php //gyarto //?>
    <?php
    $e=$pc->getProcessor();
    $A=lcfirst(processorKep($e));?>
    <img src="<?="img/windows/". $A .".png"?>" style="width:200px; position: absolute;top:100px; left:0px;"> <?php //ips or led ?>

</div>