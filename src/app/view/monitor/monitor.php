


<?php

use app\model\Monitor;
use app\model\Gyarto;
function refreshpage()
{
    header("Location:$_SERVER[REQUEST_URI]");
}


/**
 * @var Monitor $monitor;
 */
if(!empty($_FILES))
{
    include ("src\app\model\monitorfileupload.php");
}
$gyarto = Gyarto::findOneById($monitor->getGyarto());
$modify=new \app\model\monitormodify();
include("postinclude.php");
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <h2 class="kozepre"><?=$monitor->getNev() ?> </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-12" >

            <form method="post" action="index.php?controller=Monitor&action=Monitor&id=<?=$monitor->getId();?>">
            <?php if($monitor->getKeszlet()=="Van")
                    {
                        ?><button id="keszlet" class="bg-success" value="Van" name="keszlet" type="submit">Készleten</button><?php
                    }
              else
                    {
                        ?><button id="keszlet" class="bg-danger"value="Nincs" name="keszlet"  type="submit">Készleten</button>
                        <?php
                    }?>
            </form>
        </div>
        <div class="col-md-4 col-sm-12">
            <br><form method="post" action="" enctype="multipart/form-data">
            <input type="file" style="margin-bottom: 10px;margin-left:20px;"name="img[]" id="files" accept=".jpg,.jpeg,.png" multiple>
        <input type="submit" value="Feltöltés" name="submit">
        </div>
        <div class="col-md-3 col-sm-12" >
            <a href="index.php?controller=Monitor&action=Nyomtatas&id=<?=$monitor->getId();?>" target="_blank" class="btn btn-primary" >Nyomtatás</a>
    </div>



    <div class="row">

        <div class="col-md-6 col-sm-12">
            <table>
            <tr>
                    <td>
                        Gyártó
                    </td>
                    <td>
                            <?=$gyarto->getNev()?>
                    </td>
                    <td>
                        <div id="gyarto">  <form method='post' action=''><select name="gyarto" id="gyarto" style="margin-bottom:5px;">
                                    <?php

                                    $gyartok=\app\model\Gyarto::findAll();

                                    foreach ($gyartok as $gyartos):?>
                                        <option value="<?=$gyartos->getId()?>"><?=$gyartos->getNev()?></option>
                                    <?php endforeach;?>
                                </select><button type='submit'>Modosit</button></form></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Megnevezés
                    </td>
                    <td>
                        <?php $gyarto=\app\model\Gyarto::findOneById($monitor->getGyarto());
                        ?>
                        <?php if(!empty($gyarto)){?><?=$gyarto->getNev()?><?php ;}?>&nbsp;<?= $monitor->getNev()?>
                    </td>
                    <td>
                        <div id="nev"><button onclick="Nevmodositas()">Modositás</button></div>
                    </td>

                </tr>
                <tr>
                    <td>
                        Felbontás
                    </td>
                    <td>
                        <?= $monitor->getFelbontas()?><br>
                    </td>
                    <td>
                        <div id="felbontas"><button onclick="felbontasmodositas()">Modositás</button></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Kijelző tipus
                    </td>
                    <td>
                        <?= $monitor->getTipus()?>
                    </td>
                    <td>
                        <div id="tipus"><button onclick="tipusmodositas()">Modositás</button></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Pixel méret
                    </td>
                    <td>
                        <?= $monitor->getPixelMeret()?>
                    </td>
                    <td>
                        <div id="pixel"><button onclick="Pixelmeretmodositas()">Modositás</button></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Képarány
                    </td>
                    <td>
                        <?= $monitor->getKeparany() ?>
                    </td>
                    <td>
                        <div id="keparany"><button onclick="Keparanymodositas()">Modositás</button></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Frissitési idő
                    </td>
                    <td>
                        <?= $monitor->getFrissitesi_ido() ?>
                    </td>
                    <td>
                        <div id="frissitesiido"><button onclick="Frissitesiidomodositas()">Modositás</button></div>
                    </td>
                </tr>

                <tr>
                    <td>
                        Méretek:
                    </td>
                    <td>
                        <?= $monitor->getSzelesseg()?>cm x <?=$monitor->getMagassag()?>cm x <?=$monitor->getMelyseg() ?>cm
                    </td>
                    <td>
                        <div id="meretek"><button onclick="Meretmodositas()">Modositás</button></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Súly
                    </td>
                    <td>
                        <?= $monitor->getSuly()?> Kg
                    </td>
                    <td>
                        <div id="suly"><button onclick="sulymodositas()">Modositás</button></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Maximum fogyasztás
                    </td>
                    <td>
                        <?= $monitor->getMax_fogyasztas()?> w
                    </td>
                    <td>
                        <div id="maxfogyasztas"><button onclick="maxfogyasztasmodositas()">Modositás</button></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Kép frissités
                    </td>
                    <td>
                        <?= $monitor->getKepFrissites()?> Hz
                    </td>
                    <td>
                        <div id="kepfrissites"><button onclick="kepfrissitesmodositas()">Modositás</button></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Csatlakozók
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
                    <td>

                        <div id="csatlakozok"><button onclick="csatlakozomodositas()">Modositás</button></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Hibák
                    </td>
                    <td>
                        <?= $monitor->getHibak()?>
                    </td>
                    <td>
                        <div id="hiba"><button onclick="hibamodositas()">Modositás</button></div>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Készlet
                    </td>
                    <td>
                        <?php if($monitor->getKeszlet()=="Van"){?>Van<?php }else {?>Nincs<?php }?>
                    </td>

                </tr>
                <tr>
                    <td>
                        Garancia
                    </td>
                    <td>
                        <?= $monitor->getGarancia()?>
                    </td>
                    <td>
                        <div id="garancia"><button onclick="garanciamodositas()">Modositás</button></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Ár
                    </td>
                    <td>
                        <?= number_format($monitor->getAr(),0,"."," ")?>Ft
                    </td>
                    <td>
                        <div id="ar"><button onclick="armodositas()">Modositás</button></div>
                    </td>
                </tr>

            </table>
        </div>
        <div class="col-md-6 col-sm-12" style="margin-top:30px;">
            <div class="row">
                <?php
                $kepdarabok=explode(';',$monitor->getKep());

                foreach ($kepdarabok as $darab)
                {

                    if(!empty($darab))

                    {?> <div class="col-md-6 col-sm-12"><img alt="" class="pcimg img-thumbnail"  src="<?=$darab?>"></div><?php
                }
                }
                ?>
            </div>

        </div>
        <script src="./js/monitormodositas.js"></script>
    </div>

