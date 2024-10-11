<?php

use app\model\Laptop;
use app\model\Gyarto;

/**
 * @var Laptop $laptop;
 */

 

if(!empty($_FILES))
{
    include ("src\app\model\laptopupload.php");
}
function refreshpage()
{
    header("Location:$_SERVER[REQUEST_URI]");
}
$laptopmodosit=new app\Model\laptopmodify();
if(!empty($_POST)) {

    include("postinclude.php");
}
$gyarto = Gyarto::findOneById($laptop->getGyarto());

?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <h2 class="kozepre"><?=$gyarto->getNev() ?>&nbsp;<?=$laptop->getNev() ?> </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <form method="post" action="index.php?controller=Laptop&action=laptop&id=<?=$laptop->getId();?>">
                <?php if($laptop->getKeszlet()=="Van")
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
            <a href="index.php?controller=Laptop&action=Nyomtatas&id=<?=$laptop->getId();?>" target="_blank" class="btn btn-primary" >Nyomtatás</a>
        </div>

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
                     
                        <?php if(!empty($gyarto)){?><?=$gyarto->getNev()?><?php ;}?>&nbsp;<?= $laptop->getNev()?>
                    </td>
                    <td>
                        <div id="nev"> <button onclick="nev()">Modósit</button></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Processzor
                    </td>
                    <td>
                        <?= $laptop->getProcessor()?>
                    </td>
                    <td>
                        <div id="processzor"><button onclick="processor()">Modósit</button></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Memória
                    </td>
                    <td>
                        <?= $laptop->getMemoria()?>
                        <?php if(!empty($laptop->getMemoria2()))
                            {
                                echo ($laptop->getMemoria2());
                            }
                            ?>
                    </td>
                    <td>
                        <div id="memoria"><button onclick="memoria()">Modósit</button></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Videókártya
                    </td>
                    <td>
                        <?= $laptop->getVideokartya()?>
                    </td>
                    <td>
                        <div id="videokartya"><button onclick="videokartya()">Modósit</button></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Háttértár
                    </td>
                    <td>
                        C:\<?= $laptop->getHattertar1()?><br>

                        D:\<?php if($laptop->getHattertar2()=="e GB e"||$laptop->getHattertar2()=="e"||is_null($laptop->getHattertar2())){echo( "Nincs"); }else{echo($laptop->getHattertar2());}?>
                    </td>
                    <td>
                        <div id="hattertar"><button onclick="hattertar()">Modósit</button></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Operációs Rendszer:
                    </td>
                    <td>
                        <?= $laptop->getoprendszer()?>
                    </td>
                    <td>
                        <div id="oprendszer"><button onclick="oprendszer()">Modósit</button></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Optikai meghajtó
                    </td>
                    <td>
                        <?= $laptop->getOptikaimeghajto()?>
                    </td>
                    <td>
                        <div id="optikaimeghajto"><button onclick="optikaimeghajto()">Modósit</button></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Csatlakozók
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
                    <td>
                        <div id="csatlakozo"><button onclick="csatlakozo()">Modósit</button></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Hibák
                    </td>
                    <td>
                        <?= $laptop->getHiba()?>
                    </td>
                    <td>
                        <div id="hiba"><button onclick="hiba()">Modósit</button></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Garancia
                    </td>
                    <td>
                        <?= $laptop->getGarancia()?>
                    </td>
                    <td>
                        <div id="garancia"><button onclick="garancia()">Modósit</button></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Ár
                    </td>
                    <td>
                        <?= $laptop->getAr()?>Ft
                    </td>
                    <td>
                        <div id="ar"><button onclick="ar()">Modósit</button></div>
                    </td>
                </tr>

            </table>
        </div>
        <div class="col-md-6 col-sm-12"style="margin-top:30px;">
            <div class="row">
                <?php
                $kepdarabok=explode(';',$laptop->getKep());

                foreach ($kepdarabok as $darab)
                {
                    ?> <?php if($darab!=""){ ?> <div class="col-md-6 col-sm-12"><img class="pcimg img-thumbnail" style="width:80%" src="<?=$darab?>"></div><?php }
                }
                ?>
            </div>
            <div class="row">

            </div>
        </div>
    </div>
    <script src="./js/laptop.js"></script>
