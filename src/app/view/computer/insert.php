

<form action="index.php?controller=Computer&action=Create" method="post"class="col formformat">
    <div class="container-fluid">
    <h1>Számitógép felvétel</h1>
<div class="row m-3">
    <div class="col-md-4 col-sm-12" style="margin-bottom:5px; border:1px solid darkblue;">
        <h4>Gyártó</h4>
        <select name="gyarto" id="gyarto" style="margin-bottom:5px;">
            <?php

            use app\model\Gyarto;

            $gyartok= Gyarto::findAll();

            foreach ($gyartok as $gyarto):?>
                <option value="<?=$gyarto->getId()?>"><?=$gyarto->getNev()?></option>
            <?php endforeach;?>
        </select>
    </div>
    <div class="col-md-4 col-sm-12" style="border:1px solid darkblue;">
        <h4 class="kozep">Megnevezés</h4>
            <input type="text" name="nev" id="nev">
        </div>
    <div class="col-md-4 col-sm-12" style="border:1px solid darkblue;">
        <h4 class="kozep">Processzor</h4>
            <label for="radio">Intel</label>
            <input type="radio" name="radioprocessor" onclick="checkedproccesorintel()" id="intel">
            <label for="radio">AMD</label>
            <input type="radio" name="radioprocessor" onclick="checkedproccesoramd()" id="amd">
        <input type="text" name="processorgyujto" id="processorgyujto" >
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
                        <option value="2 Gb">2 Gb</option>
                        <option value="4 Gb">4 Gb</option>
                        <option value="6 Gb">6 Gb</option>
                        <option value="8 Gb">8 Gb</option>
                        <option value="16 Gb">16 Gb</option>
                        <option value="32 Gb">32 Gb</option>
                        <option value="64 Gb">64 Gb</option>

                    </select>
                </div>
                <div class="col-12 col-md-6">
                <select name="ddr2" id="ddr2">
                    <option value="e"selected>?</option>
                    <option value="DDR1">DDR 1</option>
                    <option value="DDR2">DDR 2</option>
                    <option value="DDR3">DDR 3</option>
                    <option value="DDR4">DDR 4</option>
                    <option value="DDR5">DDR 5</option>
                </select>
                </div>
                <div class="col-12 col-md-6">
                    <select name="slot" id="slot">
                        <option value="e"selected>?</option>
                        <option value="2 Gb">2 Gb</option>
                        <option value="4 Gb">4 Gb</option>
                        <option value="6 Gb">6 Gb</option>
                        <option value="8 Gb">8 Gb</option>
                        <option value="16 Gb">16 Gb</option>
                        <option value="32 Gb">32 Gb</option>
                        <option value="64 Gb">64 Gb</option>
                    </select>
                </div>
            </div>
        </div>
    <div class="col-sm-12 col-md-4 " style="border:1px solid darkblue;">
        <h4>Videókártya</h4>
        <input type="text" name="videokartya" id="vcard">
    </div>
     <div class="col-sm-12 col-md-4 " style="border:1px solid darkblue;">
        <h4 style="text-align: center;">Háttértár</h4>
        <div class="row m-3">
            <div class="col-12 col-md-6">
                <h5 style="text-align: center;">C:\</h5>
                <select name="tar" id="tar">
                    <option value="e"selected>?</option>
                    <option value=" SSD">SSD</option>
                    <option value=" HDD">HDD</option>
                    <option value=" M.2">M.2</option>
                    <option value=" NVMe">NVMe</option>
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
                    <option value=" SSD ">SSD</option>
                    <option value=" HDD ">HDD</option>
                    <option value=" M.2 ">M.2</option>
                    <option value=" NVMe ">NVMe</option>
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

</div>
<div class="row m-3">
            <div class="col-sm-12 col-md-6" style="border:1px solid darkblue;">
                <h4>Windows rendszer</h4>
                <select name="oprendszer" id="oprendszer">
                    <option value="Windows 10 Home">Windows 10 Home</option>
                    <option value="Windows 10 Pro">Windows 10 Pro</option>
                    <option value="Windows 11 Home">Windows 11 Home</option>
                    <option value="Windows 11 Pro">Windows 11 Pro</option>
                    <option value="Oprendszer nélkül">Operációs rendszer nélkül</option>
                    <option value="Linux">Linux</option>
                    <option value="FreeDos">FreeDos</option>
                </select>
            </div>
            <div class="col-sm-12 col-md-6"style="border:1px solid darkblue;">
                <h4>Optikai meghajtó</h4>
                <select name="optikaimeghajto" id="dvd">
                    <option value="Van">Van</option>
                    <option value="Nincs">Nincs</option>
                </select>
            </div>
        </div>
<div class="row m-3"style="border:1px solid darkblue;">
    <div class="col-12" >
        <h4 class="m-3" style="text-align: center;">Csatlakozók</h4>
    </div>
            <div class="col-md-3" >

                    <label for="usba">USB </label>
                    <select name="usba" id="usba">
                        <option value="Van">Van</option>
                        <option value="Nincs">Nincs</option>
                    </select>
            </div>
            <div class="col-md-3">
                    <label for="usbc">USB-C</label>
                    <select name="usbc" id="usbc">
                        <option  value="Van">Van</option>
                        <option value="Nincs">Nincs</option>
                    </select>

            </div>
            <div class="col-md-3">
                <label for="vga">VGA</label>
                <select name="vga" id="vga">
                    <option  value="Van">Van</option>
                    <option value="Nincs">Nincs</option>
                </select>
                <div class="col-md-3">
                    <label for="dvid">VGA</label>
                    <select name="dvid" id="dvid">
                        <option  value="Van">Van</option>
                        <option value="Nincs">Nincs</option>
                    </select>
    </div>
            <div class="col-md-3">
                <label for="hdmi">HDMI</label>
                    <select name="hdmi" id="hdmi">
                        <option  value="Van">Van</option>
                        <option value="Nincs">Nincs</option>
                    </select>
        </div>
            <div class="col-md-3">
        <label for="displayport">DisplayPort</label>
        <select name="display" id="display">
            <option  value="Van">Van</option>
            <option value="Nincs">Nincs</option>
        </select>
    </div>
            <div class="col-md-3">
        <label for="rj45">RJ-45</label>
        <select name="rj45" id="rj45">
            <option  value="Van">Van</option>
            <option value="Nincs">Nincs</option>
        </select>
    </div>
            <div class="col-md-3">
        <label for="fullhalgato">Füllhallgató</label>
        <select name="fullhalgato" id="rj45">
            <option  value="Van">Van</option>
            <option value="Nincs">Nincs</option>
        </select>
    </div>
            <div class="col-md-3">
        <label for="mic">Mikrofon</label>
        <select name="mikrofon" id="mic">
            <option  value="Van">Van</option>
            <option value="Nincs">Nincs</option>
        </select>
    </div>
</div>

    <div class="row m-3">
        <div class="col-md-4" style="border:1px solid darkblue;">
            <h4>Garancia</h4>
            <select name="garancia" id="garancia">
                <option value="Van">12 hónap (PiCi Shop)</option>
                <option value="Nincs">Nincs</option>
            </select>
        </div>
        <div class="col-md-6" style="border:1px solid darkblue;">
            <h4 style="text-align: center">Kép</h4>
            <div class="row">
                <div class="col-12">
                    <label for="kep" style="margin-right: 5px;">Link:</label></label><input type="text" name="kep" id="kep">
                </div>
                    <div class="col-12">
                        <br>
                       <input type="file" style="margin-bottom: 10px;margin-left:20px;"name="files" id="files"accept=".jpg,.jpeg,.png" multiple>
                </div>
            </div>
        </div>
        <div class="col-md-3-col-sm-12">
            <pre class="output">Selected files:</pre>

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
<script>

    const output = document.querySelector("#kep");
    const fileInput = document.querySelector("#files");
    console.log("eljut");
    fileInput.addEventListener("change",function()  {
        for (const file of fileInput.files) {
            output.value += `\n${file.name};`;
            console.log("eljut");

        }
    });
</script>