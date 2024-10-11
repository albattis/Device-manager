



<form action="index.php?controller=Monitor&action=Create" method="post" class="col formformat">
    <div class="container-fluid">
        <h1>Monitor felvétel</h1>
        <div class="row m-3">
            <div class="col-12">
                <h3 class="kozepre">Alap adatok</h3>
            </div>
            <div class="col-md-4 col-sm-12" style="margin-bottom:5px; border:1px solid darkblue;">
                <h4>Gyártó</h4>
                <select name="gyarto" id="gyarto" style="margin-bottom:5px;">
                    <?php

                        $gyartok=\app\model\Gyarto::findAll();

                        foreach ($gyartok as $gyarto):?>
                    <option value="<?=$gyarto->getId()?>"><?=$gyarto->getNev()?></option>
                <?php endforeach;?>
                </select>
            </div>
            <div class="col-md-4 col-sm-12" style="margin-bottom:5px; border:1px solid darkblue;">
                <h4 class="kozep">Megnevezés</h4>
                <input type="text" name="nev" style="margin-bottom:5px;" id="nev">
            </div>

            <div class="col-md-4 col-sm-12" style="margin-bottom:5px; border:1px solid darkblue;">
                <h4>Kijelző tipusa</h4>
                <select name="tipus" id="tipus" style="margin-bottom:5px;">
                    <option value="e"selected>?</option>
                    <option value="IPS">IPS</option>
                    <option value="TN">TN</option>
                    <option value="VA">VA</option>
                </select>
            </div>
            
            <div class="col-md-4 col-sm-12" style="margin-bottom:5px; border:1px solid darkblue;">
                <h4>Képarány</h4>
                <select name="kijelzo" id="kijelzo" style="margin-bottom:5px;">
                    <option value="e"selected>?</option>
                    <option value=" 16:9">16:9</option>
                    <option value=" 16:10">16:10</option>
                    <option value=" 21:9">21:9</option>
                    <option value="32:9">32:9</option>
                </select>
            </div>
        </div>
        <div class="row m-3">
            <div class="col-sm-12 col-md-4" style="border:1px solid darkblue;">
                <h4 class="kozep">Felbontás</h4>
                <select name="felbontasszelesseg" id="felbontasszelesseg"style="margin-bottom:5px;">
                    <option value="800">800</option>
                    <option value="1024">1024</option>
                    <option value="1366">1366</option>
                    <option value="1400">1400</option>
                    <option value="1920">1920</option>
                </select>
                <select name="felbontasmagassag" id="felbontasmagassag"style="margin-bottom:5px;">
                    <option value="600">600</option>
                    <option value="768">768</option>
                    <option value="800">800</option>
                    <option value="1080">1080</option>
                    <option value="1024">1024</option>
                    <option value="1200">1200</option>
                </select>
            </div>
            <div class="col-sm-12 col-md-4" style="border:1px solid darkblue;">
            <h4 class="kozep">Pixel méret</h4>
            <input type="text" name="pix" id="pixel"style="margin-bottom:5px;">
            </div>
            <div class="col-sm-12 col-md-4" style="border:1px solid darkblue;">
            <h4 class="kozep">Frissitési idő</h4>
                <select name="frissitesiido" id="frissitesiido"style="margin-bottom:5px;">
                    <option value="3 ms">3 ms</option>
                    <option value="4 ms">4 ms</option>
                    <option value="5 ms">5 ms</option>
                    <option value="6 ms">6 ms</option>
                    <option value="7 ms">7 ms</option>
                </select>
            </div>
        </div>
        <div class="row m-3">
            <div class="col-md-4 col-sm-12" style="border:1px solid darkblue;">
            <h4 class="kozep">Max fogyasztás</h4>
                <input type="number" id="maxfogyasztas" name="maxfogyasztas"style="width:60px;margin-bottom: 5px;" minlength="20" maxlength="40">

            </div>
            <div class="col-md-4 col-sm-12" style="border:1px solid darkblue;">
                <h4 class="kozep">Képfrissités</h4>
                <input type="number" id="kepfrissites" name="kepfrissites"style="width:60px;margin-bottom: 5px;" minlength="20" maxlength="40">Hz

            </div>




        </div>
        <div class="row m-3">
            <div class="col-12">
    <h3 class="kozepre">Fizikai méretek</h3>
</div>
            <div class="col-sm-12 col-md-3" style=" border:1px solid darkblue;">
                <h4 class="kozep">Szélesség</h4>
                    <label for="metrik">Metrikus mérték</label><input type="radio"  name="metrikszelesseg" id="metrikszelesseg">
                    <label for="inch">Inch</label><input type="radio" name="inchszelesseg" id="inchszelesseg">

                    <div id="eredmenyszelesseg"><input type="text" style="width:80px;margin: 5px;" value="" name="szelesseg" id="szelesseg">

                    </div>
            </div>
            <div class="col-sm-12 col-md-3" style="border:1px solid darkblue;">
                <h4 class="kozep">Magasság</h4>
                <label for="metrik">Metrikus mérték</label><input type="radio"  name="metrikmagassag" id="metrikmagassagid">
                <label for="inch">Inch</label><input type="radio" name="inchmagassag" id="inchmagassag">

                <div id="eredmenymagassag"><input type="text" style="width:80px; margin: 5px;" value="" name="magassag" id="magassag">

                </div>
            </div>
            <div class="col-sm-12 col-md-3" style="border:1px solid darkblue;">
                <h4 class="kozep">Mélység</h4>
                <label for="metrik">Metrikus mérték</label><input type="radio" name="metrikmelyseg" id="metrikmelyseg">
                <label for="inch">Inch</label><input type="radio" name="inchmelyseg" id="inchmelyseg">

                <div id="eredmenymelyseg"><input type="text" style="width:80px;margin: 5px" value="" name="melyseg" id="melyseg">
                </div>
                </div>
            <div class="col-sm-12 col-md-3" style="border:1px solid darkblue;">
                <h4 class="kozep">Súly</h4>
                <label for="suly">Kg </label><input type="radio" name="sulykg" id="sulykg"><br>
                <label for="sulylbs">LBS </label><input type="radio"  name="sulylbs"id="sulylbs">

                <div id="sulyeredmeny"><input type="text" style="width:70px;"  name="suly" id="suly" > Kg
            </div>
        </div>


        <div class="row">
            <div class="col-12" >
                <h3 class="kozepre" ">Csatlakozók</h4>
            </div>
            <div class="col-md-3"style="border:1px solid darkblue;" >

                <label for="usba"style="margin-top:5px;">USB </label>
                <select name="usba" id="usba">
                    <option value="Van">Van</option>
                    <option value="Nincs">Nincs</option>
                </select>
            </div>
            <div class="col-md-3"style="border:1px solid darkblue;">
                <label for="usbc"style="margin-top:5px;">USB-C</label>
                <select name="usbc" id="usbc">
                    <option  value="Van">Van</option>
                    <option value="Nincs">Nincs</option>
                </select>

            </div>
            <div class="col-md-3"style="border:1px solid darkblue;">
                <label for="vga"style="margin-top:5px;">VGA</label>
                <select name="vga" id="vga">
                    <option  value="Van">Van</option>
                    <option value="Nincs">Nincs</option>
                </select>
            </div>
            <div class="col-md-3"style="border:1px solid darkblue;">
                <label style="margin-top:5px;" for="hdmi">HDMI</label>
                <select name="hdmi" id="hdmi">
                    <option  value="Van">Van</option>
                    <option value="Nincs">Nincs</option>
                </select>
            </div>
            <div class="col-md-3"style="border:1px solid darkblue;">
                <label style="margin-top:5px;" for="dvid">DVI-D</label>
                <select name="dvid" id="dvid">
                    <option  value="Van">Van</option>
                    <option value="Nincs">Nincs</option>
                </select>
            </div>
            <div class="col-md-3"style=" border:1px solid darkblue;">
                <label for="displayport" style="margin-top:5px;">DisplayPort</label>
                <select name="display" id="display">
                    <option  value="Van">Van</option>
                    <option value="Nincs">Nincs</option>
                </select>
            </div>
            <div class="col-md-3"style="border:1px solid darkblue;">
                <label for="fullhalgato"style="margin-top:5px;">Füllhallgató</label>
                <select name="fullhalgato" id="rj45">
                    <option  value="Van">Van</option>
                    <option value="Nincs">Nincs</option>
                </select>
            </div>
            <div class="col-md-3"style="border:1px solid darkblue;">
                <label for="mic"style="margin-top:5px;">Mikrofon</label>
                <select name="mikrofon" id="mic">
                    <option  value="Van">Van</option>
                    <option value="Nincs">Nincs</option>
                </select>
            </div>

        </div>
      
        <div class="row m-3">

            <div class="col-md-7" style="border:1px solid darkblue;">
                <h4 style="text-align: center">Kép</h4>
                <div class="row">
                    <div class="col-12">
                        <label for="kep" style="margin-right: 5px;">Link:</label></label><input type="text" name="kep" id="kep">
                    </div>

                </div>
            </div>
            <div class="col-md-5" style="border:1px solid darkblue;">
                <h4>Garancia</h4>
                <select name="garancia" id="garancia">
                    <option value="Van">12 hónap (PiCi Shop)</option>
                    <option value="Nincs">Nincs</option>
                </select>
            </div>
        </div>

        <div class="row m-3">

            <div class="col-md-4" style="border:1px solid darkblue;">
                <h4>Hibák</h4>
                <input type="text" name="hiba" id="hibak">

            </div>
            <div class="col-md-4" style="border:1px solid darkblue;">
                <h4>Készleten van</h4>
                <select name="keszlet" id="keszlet">
                    <option value="Van">Van</option>
                    <option value="Nincs">Nincs</option>
                </select>
            </div>
            <div class="col-md-4" style="border:1px solid darkblue;">
                <h4>Ár</h4>
                <input type="text" name="ar" id="ar">
            </div>




            <button class="modifybutton" type="submit">Küld</button>
</form>
<script src="./js/phisicaldimension.js"></script>