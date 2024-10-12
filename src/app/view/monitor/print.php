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
        <h1 style="font-size:90px;"><?=$nev?></h1>
           </p>
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
                        <?= $monitor->getPixelMeret()?>
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
                        <?php $usba=$monitor->getUsba();if( $usba =="Van"){?>Usb<?php }?>
                        <?php $usbc=$monitor->getUsbc();if( $usbc =="Van"){?>,Usb-C<?php }?>
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
                <td style="border:0px;"><p style="color:forestgreen;text-align: left;font-weight: bold;font-size: 50px;">PiCi Ár : </p></td>
                <td style="border:0px;"><img src="./img/picishop.png" style="width:300px;"</td>
            </tr>
            <tr><td colspan="2">
            <p style="color:forestgreen;text-align: center;font-weight: bold;font-size: 100px;"><?= number_format($monitor->getAr(),0,".",".")?>&nbsp;Ft
            </td></tr>
            </table>

</div>
        <div class="col-4">
           <?php if(!empty($gyarto)){ ?> <img src="<?=$gyarto->getKep()?>" style="width:250px;position: absolute;top: 300px; left:-50px;"><?php ;}?> <?php //gyarto //?>
            <img src="<?="img/kijelzo/".$monitor->getTipus().".jpg"?>" style="width:200px; position: absolute;top:310px; left:90px;"> <?php //ips or led ?>
            
        </div>
    </div>
</div>
<form>
<input type="button" value="Print this page" onClick="window.print()">
</form>