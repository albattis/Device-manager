<?php
/**
 * @var Laptop $laptop;
 */

use app\model\Laptop;
use app\model\Gyarto;

$nev="";
$szelesseg=$laptop->getFelbontasszelesseg();

$magassag=$laptop->getFelbontasmagassag();

$gyarto = Gyarto::findOneById($laptop->getGyarto());
if(!empty($gyarto)) {
    $nev = $gyarto->getNev() . " " . $laptop->getNev();
}else
{
    $nev=$laptop->getNev();
}

function processorKep($pro)
{
    $proc=explode(" ",$pro);


    return $proc[0];
}

function felbontasSzamitas(Laptop $laptop)
{

    $e="";
    $a=$laptop->getFelbontasszelesseg();
    $b=$laptop->getFelbontasmagassag();
    if($a>="1920" && $a<="2559" && $b>="1024" &&$b<="1439"){ $e="Full Hd";}
    else if($a>="2560" && $a<="3839" && $b>="1440"&&$b<="2159"){$e= "qhd"; }
    else if($a=="3840" && $b=="2160"){$e="uhd";}

    return $e;
}

?>


<style>
    h1{
        font-family: 'Roboto Black';


    }
    .roboto
    {
        font-family: 'Roboto Black';
        font-size: 25px;
    }
    table
    {
        font-size:20px;
    }

</style>
<div class="row">
<div class="col-6">
    <table style="width:700px">
        <tr>

            <td  colspan="2" style="border-radius:20px 20px 0px 0px;text-align:center;color:white;background-color:#7faedd ;font-weight: bold">
                <h1 style="font-size: 60px;"><?=$nev ." ". $laptop->getKijelzomeret()."\" " . "laptop"?>
                </h1>
            </td>


        </tr>
        <tr>


            <tr>
            <td colspan="2">
            <?php if(!empty($gyarto)){ ?>
            <img src="<?=$gyarto->getKep()?>" style="margin-right:100px;width:20%; display:inline-block;"><?php ;}?> <?php $e=$laptop->getProcessor(); $A=lcfirst(processorKep($e)); ?>
                <img src="<?="img/windows/". $A .".png"?>" style="margin-right:100px;width:20%; display:inline-block;">
                <img src="<?="img/kijelzo/". felbontasSzamitas($laptop) .".png"?>" style="display:inline-block; width:20%">

            </tr>

        <tr>
            <td class="roboto">
                <strong>Processzor</strong>
            </td>
            <td>
                <?= $laptop->getProcessor()?>
            </td>

        </tr>
        <tr>
            <td class="roboto">
                <strong>Memória</strong>
            </td>
            <td>
                <?= $laptop->getMemoria()?>
            </td>

        </tr>
        <tr >
            <td class="roboto">
                <strong>Videókártya</strong>
            </td>
            <td>
                <?= $laptop->getVideokartya()?>
            </td>

        </tr>
        <tr>
            <td class="roboto">
                <strong> Háttértár<strong>
            </td>
            <td>
                C:\<?= $laptop->getHattertar1()?><br>

                <?php if($laptop->getHattertar2()=="e GB e"||$laptop->getHattertar2()=="ee"||is_null($laptop->getHattertar2())){echo( ""); }else{echo($laptop->getHattertar2());}?>
            </td>

        </tr>
        <tr>
            <td class="roboto">
                <strong>Operációs Rendszer:</strong>
            </td>
            <td>
                <?= $laptop->getoprendszer()?> elérhető hozzá.
            </td>

        </tr>
        <tr>
            <td class="roboto">
                <strong>Optikai meghajtó</strong>
            </td>
            <td>
                <?php if($laptop->getOptikaimeghajto()=="Nincs"){?>Külső meghajtó elérhető hozzá.<?php }?>
            </td>

        </tr>
        <tr>
            <td class="roboto">
                <strong> Csatlakozók</strong>
            </td>
            <td>
                <?php $usba=$laptop->getUsba();if( $usba =="Van"){?>USB<?php }?>
                <?php $usbc=$laptop->getUsbc();if( $usbc =="Van"){?>,USB-C<?php }?>
                <?php $hdmi=$laptop->getHdmi();if( $hdmi =="Van"){?>,HDMI<?php }?>
                <?php $vga=$laptop->getVga();if( $vga =="Van"){?>,VGA<?php }?>
                <?php $dvid=$laptop->getDvid();if( $dvid =="Van"){?>,DVI-D<?php }?>
                <?php $display=$laptop->getDisplay();if( $display =="Van"){?>,DisplayPort<?php }?>
                <?php $rj=$laptop->getRj45();if( $rj =="Van"){?>,RJ-45<?php }?>
                <?php $fullhalgato=$laptop->getFullhalgato();if( $fullhalgato =="Van"){?>,Füllhallgató<?php }?>
                <?php $mikorofon=$laptop->getMikrofon();if( $vga =="Van"){?>,Mikrofon<?php }?>
            </td>

        </tr>
        <tr>
            <td class="roboto">
                <strong>Hibák</strong>
            </td>
            <td>
                <?= $laptop->getHiba()?>
            </td>

        </tr>
        <tr>
            <td class="roboto">
                <strong>Garancia</strong>
            </td>
            <td>
                <?php if($laptop->getGarancia()=="Van"){?> 12 Hónap PiCi Shop garancia <?php }else{?> Nincs <?php }?>
            </td>

        </tr>

        <tr style="border:0px;">
            <td style="border:0px;"><p style="color:forestgreen;text-align: center;font-weight: bold;font-size: 50px;">PiCi ár : </p></td>
            <td style="border-bottom: 0px;"><img src="./img/picishop.png" style="width:100%" alt=""></td>
        </tr>

        <tr style="background-image:url('./img/picishop.png');background-repeat: no-repeat;background-attachment: fixed"><td colspan="2">
                <p style="color:forestgreen; text-align: right;text-decoration:underline; text-decoration-color:#7faedd;  font-weight: bolder ;font-size: 150px;"><strong><?= number_format($laptop->getAr(),0,".",".")?></strong>&nbsp;Ft
                </p>



        </tr>



    </table>
</div>

<div class="col-4">


</div>