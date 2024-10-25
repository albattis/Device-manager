<?php

use app\model\Gyarto;
use app\model\Monitor;
/**
 * @var Monitor $monitor;
 */
$nev="";

$gyarto = Gyarto::findOneById($monitor->getGyarto());
    if(!empty($gyarto)) {
        $nev = $gyarto->getNev() . " " . $monitor->getNev();
    }else
    {
        $nev=$monitor->getNev();
    }


function colSzamitas($szell,$mag)
{
    //a2+b2=c2
$count=round(sqrt((pow($szell,2)+pow($mag,2)))/2.57,0);
return $count;

}
function felbontasSzamitas(Monitor $m)
{
$felbontando=$m->getFelbontas();

$e="";
$felbontas=explode(" x ",$felbontando,2);

 if($felbontas[0]>="1920" && $felbontas[0]<=2559&&$felbontas[1]>="1080"&&$felbontas[1]<=1439){$e="Full Hd";}
     else if($felbontas[0]>="2560" && $felbontas[0]<=3839 && $felbontas[1]>="1440"&&$felbontas[1]<="2159"){$e= "qhd"; }
     else if($felbontas[0]=="3840" && $felbontas[1]=="2160"){$e="uhd";}
return $e;
}



?>
<style>
     h1{
        font-family: 'Roboto Black';
        
       
    }
    table
    {
        font-size: 25px;
    }
    
</style>
<div class="contanier-fluid">

    <div class="row">
        <div class="col-6">
<table style="width:700px">

<tr>

    <td colspan="2" style="text-align:center;border-radius:20px 20px 0px 0px;color:white;background-color:deepskyblue ;font-weight: bold; ">
        <h1 style="font-size:90px;"><?=$nev." ".colSzamitas($monitor->getSzelesseg(),$monitor->getMagassag())?>" Monitor</h1>
           </p>
    </td>


</tr>
    <tr>
        <td>
            <?php if(!empty($gyarto)){ ?> <img src="<?=$gyarto->getKep()?>" style="width:250px;display:inline-block;"><?php ;}?> <?php //gyarto //?>

        </td>
        <td>
            <img src="<?="img/kijelzo/". felbontasSzamitas($monitor) .".png"?>" style="width:200px; display:inline-block;"> <?php //ips or led ?>

        </td>
    </tr>
   <tr>
                    <td>
                        <strong> Felbontás</strong>
                    </td>
                    <td>
                        <?= $monitor->getFelbontas()?><br>
                    </td>

                </tr>
   <tr>
                    <td>
                        <strong>Kijelző tipus</strong>
                    </td>
                    <td>
                        <?= $monitor->getTipus()?>
                    </td>

                </tr>
   <tr>
                    <td>
                        <strong> Pixel méret</strong>
                    </td>
                    <td>
                        <?= $monitor->getPixelMeret()?> mm
                    </td>

                </tr>
   <tr>
                    <td>
                        <strong> Képarány</strong>
                    </td>
                    <td>
                        <?= $monitor->getKeparany() ?>
                    </td>

                </tr>
   <tr>
                    <td>
                        <strong>Frissitési idő</strong>
                    </td>
                    <td>
                        <?= $monitor->getFrissitesi_ido() ?>
                    </td>

                </tr>
   <tr>
                    <td>
                        <strong>Méretek:</strong>
                    </td>
                    <td>
                        <?= $monitor->getSzelesseg()?>cm x <?=$monitor->getMagassag()?>cm x <?=$monitor->getMelyseg() ?>cm
                    </td>

                </tr>
   <tr>
                    <td>
                        <strong>Súly</strong>
                    </td>
                    <td>
                        <?= $monitor->getSuly()?> Kg
                    </td>

                </tr>
    <tr>
                    <td>
                        <strong> Maximum fogyasztás</strong>
                    </td>
                    <td>
                        <?= $monitor->getMax_fogyasztas()?> w
                    </td>

                </tr>
   <tr>
                    <td>
                        <strong> Kép frissités</strong>
                    </td>
                    <td>
                        <?= $monitor->getKepFrissites()?> Hz
                    </td>

                </tr>
   <tr>
                    <td>
                        <strong>Csatlakozók</strong>
                    </td>
                    <td>
                        <?php $usba=$monitor->getUsba();if( $usba =="Van"){?>USB<?php }?>
                        <?php $usbc=$monitor->getUsbc();if( $usbc =="Van"){?>,USB-C<?php }?>
                        <?php $hdmi=$monitor->getHdmi();if( $hdmi =="Van"){?>,HDMI<?php }?>
                        <?php $dvid=$monitor->getdvid();if( $dvid =="Van"){?>,DVI-D<?php }?>
                        <?php $vga=$monitor->getVga();if( $vga =="Van"){?>,VGA<?php }?>
                        <?php $display=$monitor->getDisplayPort();if( $display =="Van"){?>,DisplayPort<?php }?>
                        <?php $fullhalgato=$monitor->getFullhallgato();if( $fullhalgato =="Van"){?>,Füllhallgató<?php }?>
                        <?php $mikrofon=$monitor->getMikrofon(); if( $mikrofon =="Van"){?>,Mikrofon<?php }?>
                        <?php $hangszoro=$monitor->getHangszoro();if( $hangszoro =="Van"){?>,Hangszoró<?php }?>
                    </td>

                </tr>
   <tr>
                    <td>
                        <strong>Hibák</strong>
                    </td>
                    <td>
                        <?= $monitor->getHibak()?>
                    </td>

                </tr>
   <tr>
                    <td>
                        <strong>Hangszoró</strong>
                    </td>
                    <td>
                        <?php if($monitor->getHangszoro()=="Van"){?>Van<?php }else {?>Nincs<?php }?>
                    </td>

                </tr>
   
   <tr>
                    <td>
                        <strong>  Garancia</strong>
                    </td>
                    <td>
                        <?php if($monitor->getGarancia()=="Van"){?>12 hónap <strong>PiCi Shop</strong><?php } else {?>Nincs<?php }?>
                    </td>

                </tr>
                
            <tr style="border:0px;">
                <td style="border:0px;"><p style="color:forestgreen;text-align: left;font-weight: bold;font-size: 50px;">PiCi ár : </p></td>
                <td style="border:0px;"><img src="./img/picishop.png" style="width:300px;"</td>
            </tr>
            <tr><td colspan="2">
                    <p style="color:forestgreen;text-align: right;font-weight: bolder ;font-size: 150px;"><strong><?= number_format($monitor->getAr(),0,".",".")?></strong>&nbsp;Ft
            </td></tr>
            </table>

</div>
        <div class="col-4">
            

        </div>
    </div>
</div>
<form>
<input type="button" value="Print this page" onClick="window.print()">
</form>