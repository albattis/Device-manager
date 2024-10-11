function nev()
{
    const nev=document.getElementById("nev");
    nev.innerHTML="";
    nev.innerHTML="<form method='post' action=''><input type='text' name='nev' id='nev'><button type='submit'>Modosit</button> </form>";
}

function processor()
{
    const processor=document.getElementById("processzor");
    processor.innerHTML="";
    processor.innerHTML="<form method='post' action=''>" +
        "<input type='text' name='processor' id='processor'>" +
        "<button type='submit'>Modosit</button> </form>";
}

function memoria()
{
    const memoria=document.getElementById("memoria");
    memoria.innerHTML="";
    memoria.innerHTML="<form method='post' action=''>" +
        "<div class=\"row m-3\">\n" +
        "                <div class=\"col-12 col-md-6\">\n <p>1</p>" +
        "                    <select name=\"ddr\" id=\"ddr\">\n" +
        "                        <option value=\"e\"selected>?</option>\n" +
        "                     <option value=\"DDR1\">DDR 1</option>\n" +
        "                    <option value=\"DDR2\">DDR 2</option>\n" +
        "                    <option value=\"DDR3\">DDR 3</option>\n" +
        "                    <option value=\"DDR4\">DDR 4</option>\n" +
        "                    <option value=\"DDR5\">DDR 5</option>\n" +
        "                    </select>\n" +
        "                </div>\n" +
        "                <div class=\"col-12 col-md-6\">\n<p> Slot:</p>" +
        "                    <select name=\"ddrertek\" id=\"ddrertek\">\n" +
        "                        <option value=\"e\"selected>?</option>\n" +
        "                        <option value=\"2\">2 Gb</option>\n" +
        "                        <option value=\"4\">4 Gb</option>\n" +
        "                        <option value=\"6\">6 Gb</option>\n" +
        "                        <option value=\"8\">8 Gb</option>\n" +
        "                        <option value=\"16\">16 Gb</option>\n" +
        "                        <option value=\"32\">32 Gb</option>\n" +
        "                    </select>\n" +
        "                </div>\n" +
        "                <div class=\"col-12 col-md-6\">\n<p>2.</p>" +
        "                <select name=\"ddr2\" id=\"ddr2\">\n" +
        "                    <option value=\"e\"selected>?</option>\n" +
        "                    <option value=\"DDR1\">DDR 1</option>\n" +
        "                    <option value=\"DDR2\">DDR 2</option>\n" +
        "                    <option value=\"DDR3\">DDR 3</option>\n" +
        "                    <option value=\"DDR4\">DDR 4</option>\n" +
        "                    <option value=\"DDR5\">DDR 5</option>\n" +
        "                </select>\n" +
        "                </div>\n" +
        "                <div class=\"col-12 col-md-6\"><p>Slot:</p>\n" +
        "                    <select name=\"slot\" id=\"slot\">\n" +
        "                        <option value=\"e\"selected>?</option>\n" +
        "                        <option value=\"2\">2 Gb</option>\n" +
        "                        <option value=\"4\">4 Gb</option>\n" +
        "                        <option value=\"6\">6 Gb</option>\n" +
        "                        <option value=\"8\">8 Gb</option>\n" +
        "                        <option value=\"16\">16 Gb</option>\n" +
        "                        <option value=\"32\">32 Gb</option>\n" +
        "                    </select>\n" +
        "                </div><button type='submit'>Modósit</button> </form>";
}

function videokartya()
{
    const videokartya=document.getElementById("videokartya");
    videokartya.innerHTML="";
    videokartya.innerHTML="<form method='post' action=''><input type='text' name='videokartya' id='videokartya'><button type='submit'>Modosit</button> </form>";
}
function hattertar()
{
    const hatter=document.getElementById("hattertar");
    hatter.innerHTML="";
    hatter.innerHTML="<form method='post' action=''> <div class=\"row m-3\">\n" +
        "            <div class=\"col-12 col-md-6\">\n" +
        "                <h5 style=\"text-align: center;\">C:\\</h5>\n" +
        "                <select name=\"tar\" id=\"tar\">\n" +
        "                    <option value=\"e\"selected>?</option>\n" +
        "                    <option value=\" SSD\">SSD</option>\n" +
        "                    <option value=\" HDD\">HDD</option>\n" +
        "                    <option value=\" M.2\">M.2</option>\n" +
        "                    <option value=\" NVMe\">NVMe</option>\n" +
        "                </select>\n" +
        "                <select name=\"tarmeret\" id=\"tarmeret\">\n" +
        "                    <option value=\"e\"selected>?</option>\n" +
        "                    <option value=\"128 Gb\">128 Gb</option>\n" +
        "                    <option value=\"240 Gb\">240 Gb</option>\n" +
        "                    <option value=\"256 Gb\">256 Gb</option>\n" +
        "                    <option value=\"500 Gb\">500 Gb</option>\n" +
        "                    <option value=\"1 Tb\">1 TB</option>\n" +
        "                </select>\n" +
        "\n" +
        "            </div>\n" +
        "            <div class=\"col-12 col-md-6\">\n" +
        "                <h5 style=\"text-align: center;\">D:\\</h5>\n" +
        "                <select name=\"tar2\" id=\"tar2\">\n" +
        "                    <option value=\"e\"selected>?</option>\n" +
        "                    <option value=\" SSD \">SSD</option>\n" +
        "                    <option value=\" HDD \">HDD</option>\n" +
        "                    <option value=\" M.2 \">M.2</option>\n" +
        "                    <option value=\" NVMe \">NVMe</option>\n" +
        "                </select>\n" +
        "                <select name=\"tarmeret2\" id=\"tarmeret2\">\n" +
        "                    <option value=\"e\"selected>?</option>\n" +
        "                    <option value=\"128 Gb\">128 Gb</option>\n" +
        "                    <option value=\"240 Gb\">240 Gb</option>\n" +
        "                    <option value=\"256 Gb\">256 Gb</option>\n" +
        "                    <option value=\"500 Gb\">500 Gb</option>\n" +
        "                    <option value=\"1 Tb\">1 TB</option>\n" +
        "                </select>\n" +
        "\n" +
        "            </div>\n" +
        "        </div><button type='submit'>Modosit</button></form>";
}

function oprendszer()
{
    const op=document.getElementById("oprendszer");
    op.innerHTML="";
    op.innerHTML="<form method='post' action=''> <select name=\"oprendszer\" id=\"oprendszer\">\n" +
        "                    <option value=\"Windows 10 Home\">Windows 10 Home</option>\n" +
        "                    <option value=\"Windows 10 Pro\">Windows 10 Pro</option>\n" +
        "                    <option value=\"Windows 11 Home\">Windows 11 Home</option>\n" +
        "                    <option value=\"Windows 11 Pro\">Windows 11 Pro</option>\n" +
        "                    <option value=\"Oprendszer nélkül\">Operációs rendszer nélkül</option>\n" +
        "                    <option value=\"Linux\">Linux</option>\n" +
        "                    <option value=\"FreeDos\">FreeDos</option>\n" +
        "                </select><button type='submit'>Modosit</button> </form>";
}
function csatlakozo()
{
    const cst=document.getElementById("csatlakozo");
    cst.innerHTML="";
    cst.innerHTML="<form method='post' action=''><label for=\"usb\">USB &nbsp;</label><input type=\"checkbox\" name=\"usb\" id=\"usb\"><label for=\"usbc\">&nbsp USB-C&nbsp;</label><input type=\"checkbox\" name=\"usbc\" id=\"usbc\">\n" +
        "                        <label for=\"hdmi\">HDMI &nbsp;</label><input type=\"checkbox\" name=\"hdmi\" id=\"hdmi\"> <label for=\"dvid\">&nbsp DVI-D &nbsp;</label><input type=\"checkbox\" name=\"dvid\" id=\"dvid\"><label for=\"vga\">&nbsp VGA&nbsp;</label><input type=\"checkbox\" name=\"vga\" id=\"vga\">\n" +
        "                        <label for=\"display\">Display &nbsp;</label><input type=\"checkbox\" name=\"display\" id=\"display\"><br><label for=\"full\">&nbsp Füllhallgató&nbsp;</label><input type=\"checkbox\" name=\"full\" id=\"full\">\n" +
        "                        <label for=\"mikrofon\">&nbsp Mikrofon &nbsp;</label><input type=\"checkbox\" name=\"mikrofon\" id=\"mikrofon\"><label for=\"rj45\">&nbsp RJ45 &nbsp;</label><input type=\"checkbox\" name=\"rj45\" id=\"rj45\"><button type='submit'>Modosit</button></form>";
}

function hiba()
{
    const hiba=document.getElementById("hiba");
    hiba.innerHTML="";
    hiba.innerHTML="<form method='post' action=''><input type='text' name='hiba' id='hiba'><button type='submit'>Modosit</button> </form>";
}

function garancia()
{
const garancia=document.getElementById("garancia");
garancia.innerHTML="";
garancia.innerHTML="<form method='post' action=''><select name=\"garancia\" id=\"garancia\">\n" +
    "                <option value=\"Van\">12 hónap (PiCi Shop)</option>\n" +
    "                <option value=\"Nincs\">Nincs</option>\n" +
    "            </select><button type='submit'>Modosit</button> </form>";
}

function ar()
{
 const ar=document.getElementById("ar");
 ar.innerHTML="";
 ar.innerHTML="<form method='post' action=''><input type='text' name='ar' id='ar'><button type='submit'>Modosit</button></form>";
}

function optikaimeghajto()
{
    const opt=document.getElementById("optikaimeghajto");
    opt.innerHTML="";
    opt.innerHTML="<form method='post' action=''><select name=\"optikaimeghajto\" id=\"dvd\">\n" +
        "                    <option value=\"Van\">Van</option>\n" +
        "                    <option value=\"Nincs\">Nincs</option>\n" +
        "                </select><button type='submit'>Modosit</button> </form>";
}

function gyarto()
{
    const gyarto=document.getElementById("gyarto");
    gyarto.innerHTML="";

}