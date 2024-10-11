<?php
use app\model\Computer;
/**
 *@var Computer $pc;
 */

?>
<form action="index.php?controller=Computer&action=Update&id=<?=$pc->getId()?>" method="post"class="col formformat">
    <div class="container-fluid">
        <h1>PC felvétel</h1>
        <div class="row m-3">
            <div class="col-md-4 col-sm-12" style="border:1px solid darkblue;">
                <h4 class="kozep">Megnevezés</h4>
                <input type="text" name="nev" value="<?=$pc->getNev()?>" id="nev">
            </div>
            <div class="col-md-4 col-sm-12" style="border:1px solid darkblue;">
                <h4 class="kozep">Processzor</h4>
                <label for="radio">Intel</label>
                <input type="radio" name="radioprocessor"  onclick="checkedproccesorintel()" id="intel">
                <label for="radio">AMD</label>
                <input type="radio" name="radioprocessor" onclick="checkedproccesoramd()" id="amd">
                <input type="text" required name="processorgyujto" id="processorgyujto" >
            </div>
            <div class="col-md-4 col-sm-12" style="border:1px solid darkblue;">
                <div id="checkedprocessor"> </div>
                <div id="gener"></div>
            </div>
        </div>
        <div class="row m-3">
            <div class="col-sm-12 col-md-4 " style="border:1px solid darkblue;">
                <h4 class="kozep">Memória</h4>
                <div class="row m-3">
                    <div class="col-12 col-md-6">
                        <select name="ddr" id="ddr">
                            <option value="e"selected>?</option>
                            <option value="DDR1">DDR 1</option>
                            <option value="DDR2">DDR 2</option>
                            <option value="DDR3">DDR 3</option>
                            <option value="DDR4">DDR 4</option>
                            <option value="DDR5">DDR 5</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <select name="ddrertek" id="ddrertek">
                            <option value="e"selected>?</option>
                            <option value="2">2 Gb</option>
                            <option value="4">4 Gb</option>
                            <option value="6">6 Gb</option>
                            <option value="8">8 Gb</option>
                            <option value="16">16 Gb</option>
                            <option value="32">32 Gb</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 " style="border:1px solid darkblue;">
                <h4>Videókártya</h4>
                <input type="text" name="videokartya" value="<?=$pc->getVideokartya()?>"id="vcard">
            </div>
            <div class="col-sm-12 col-md-4 " style="border:1px solid darkblue;">
                <h4 style="text-align: center;">Háttértár</h4>
                <div class="row m-3">
                    <div class="col-12 col-md-6">
                        <h5 style="text-align: center;">C:\</h5>
                        <select name="tar" id="tar">
                            <option value="e"selected>?</option>
                            <option value="SSD">SSD</option>
                            <option value="HDD">HDD</option>
                            <option value="M.2">M.2</option>
                            <option value="NVMe">NVMe</option>
                        </select>
                        <select name="tarmeret" id="tarmeret">
                            <option value="e"selected>?</option>
                            <option value="128 Gb">128 Gb</option>
                            <option value="240 Gb">240 Gb</option>
                            <option value="256 Gb">256 Gb</option>
                            <option value="500 Gb">500 Gb</option>
                            <option value="1 Tb">1 TB</option>
                        </select>

                    </div>
                    <div class="col-12 col-md-6">
                        <h5 style="text-align: center;">D:\</h5>
                        <select name="tar2" id="tar2">
                            <option value="e"selected>?</option>
                            <option value="SSD">SSD</option>
                            <option value="HDD">HDD</option>
                            <option value="M.2">M.2</option>
                            <option value="NVMe">NVMe</option>
                        </select>
                        <select name="tarmeret2" id="tarmeret2">
                            <option value="e"selected>?</option>
                            <option value="128 Gb">128 Gb</option>
                            <option value="240 Gb">240 Gb</option>
                            <option value="256 Gb">256 Gb</option>
                            <option value="500 Gb">500 Gb</option>
                            <option value="1 Tb">1 TB</option>
                        </select>

                    </div>
                </div>

        </div>
        <div class="row m-3">
            <div class="col-sm-12 col-md-6" style="border:1px solid darkblue;">
                <h4>Windows rendszer</h4>
                <select name="oprendszer" id="oprendszer">
                    <option value="Windows 10 Home"<?php if($pc->getOprendszer()=="Windows 10 Home"){?> selected<?php }?> >Windows 10 Home</option>
                    <option value="Windows 11 Home"<?php if($pc->getOprendszer()=="Windows 11 Home"){?> selected<?php }?>>Windows 11 Home</option>
                </select>
            </div>
            <div class="col-sm-12 col-md-6"style="border:1px solid darkblue;">
                <h4>Optikai meghajtó</h4>
                <select name="optikaimeghajto" id="dvd">
                    <option value="Van"<?php if($pc->getOptikaimeghajto()=="Van"){?> selected<?php }?>>Van</option>
                    <option value="Nincs"<?php if($pc->getOptikaimeghajto()=="Nincs"){?> selected<?php }?>>Nincs</option>
                </select>
            </div>
        </div>
        <div class="row m-3"style="border:1px solid darkblue;">
            <div class="col-12" >
                <h4>Csatlakozók</h4>
            </div>
            <div class="col-md-3" >

                <label for="usba">USB </label>
                <select name="usba" id="usba">
                    <option value="Van"<?php if($pc->getUsba()=="Van"){?> selected<?php }?>>Van</option>
                    <option value="Nincs"<?php if($pc->getUsba()=="Nincs"){?> selected<?php }?>>Nincs</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="usbc">USB-C</label>
                <select name="usbc" id="usbc">
                    <option  value="Van"<?php if($pc->getUsbc()=="Van"){?> selected<?php }?>>Van</option>
                    <option value="Nincs"<?php if($pc->getUsbc()=="Nincs"){?> selected<?php }?>>Nincs</option>
                </select>

            </div>
            <div class="col-md-3">
                <label for="vga">VGA</label>
                <select name="vga" id="vga">
                    <option  value="Van"<?php if($pc->getVga()=="Van"){?> selected<?php }?>>Van</option>
                    <option value="Nincs"<?php if($pc->getVga()=="Nincs"){?> selected<?php }?>>Nincs</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="hdmi">HDMI</label>
                <select name="hdmi" id="hdmi">
                    <option  value="Van"<?php if($pc->getHdmi()=="Van"){?> selected<?php }?>>Van</option>
                    <option value="Nincs"<?php if($pc->getHdmi()=="Nincs"){?> selected<?php }?>>Nincs</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="displayport">DisplayPort</label>
                <select name="display" id="display">
                    <option  value="Van"<?php if($pc->getDisplay()=="Van"){?> selected<?php }?>>Van</option>
                    <option value="Nincs"<?php if($pc->getDisplay()=="Nincs"){?> selected<?php }?>>Nincs</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="rj45">RJ-45</label>
                <select name="rj45" id="rj45">
                    <option  value="Van"<?php if($pc->getRj45()=="Van"){?> selected<?php }?>>Van</option>
                    <option value="Nincs"<?php if($pc->getRj45()=="Nincs"){?> selected<?php }?>>Nincs</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="fullhalgato">Füllhallgató</label>
                <select name="fullhalgato" id="rj45">
                    <option  value="Van"<?php if($pc->getFullhalgato()=="Van"){?> selected<?php }?>>Van</option>
                    <option value="Nincs"<?php if($pc->getFullhalgato()=="Nincs"){?> selected<?php }?>>Nincs</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="mic">Mikrofon</label>
                <select name="mikrofon" id="mic">
                    <option  value="Van"<?php if($pc->getMikrofon()=="Van"){?> selected<?php }?>>Van</option>
                    <option value="Nincs"<?php if($pc->getMikrofon()=="Nincs"){?> selected<?php }?>>Nincs</option>
                </select>
            </div>
        </div>

        <div class="row m-3">
            <div class="col-md-4" style="border:1px solid darkblue;">
                <h4>Garancia</h4>
                <select name="garancia" id="garancia">
                    <option value="Van"<?php if($pc->getGarancia()=="Van"){?> selected<?php }?>>12 hónap (PiCi Shop)</option>
                    <option value="Nincs"<?php if($pc->getGarancia()=="Nincs"){?> selected<?php }?>>Nincs</option>
                </select>
            </div>
            <div class="col-md-4" style="border:1px solid darkblue;">
                <h4>Kép</h4>
                <input type="text" value="<?=$pc->getKep()?>" name="kep" id="kep">
            </div>
            <div class="col-md-4" style="border:1px solid darkblue;">
                <h4>Hibák</h4>
                <input type="text" value="<?=$pc->getHiba()?>"name="hiba" id="hibak">

            </div>
        </div>

        <div class="row m-3">
            <div class="col-md-6" style="border:1px solid darkblue;">
                <h4>Készleten van</h4>
                <select name="keszlet" id="keszlet">
                    <option value="Van"<?php if($pc->getKeszlet()=="Van"){?> selected<?php }?>>Van</option>
                    <option value="Nincs"<?php if($pc->getKeszlet()=="Nincs"){?> selected<?php }?>>Nincs</option>
                </select>
            </div>
            <div class="col-md-6" style="border:1px solid darkblue;">
                <h4>Ár</h4>
                <input type="text" value="<?=$pc->getAr()?>"name="ar" id="ar">
            </div>




            <button target="_blank" class="modifybutton" type="submit">Küld</button>
</form>
