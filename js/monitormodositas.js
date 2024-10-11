function Nevmodositas()
{
    const nev=document.getElementById("nev");
    nev.innerHTML="";
    nev.innerHTML="<form method='post' action=''><input type=\"text\" name=\"nev\" style=\"margin-bottom:5px;\" value=\"\" id=\"nev\"><button type='submit'>Modosit</button></form> ";
}

function felbontasmodositas()
{
    const fel=document.getElementById("felbontas");
    fel.innerHTML="";
    fel.innerHTML=' <form method=\'post\' action=\'\'><select name="felbontasszelesseg" id="felbontasszelesseg"style="margin-bottom:5px;">'+
    '<option value="800">800</option>'+
    '<option value="1024">1024</option>'+
    '<option value="1366">1366</option>'+
    '<option value="1400">1400</option>'+
    '<option value="1920">1920</option></select>'+
    '<select name="felbontasmagassag" id="felbontasmagassag"style="margin-bottom:5px;">'+
    '<option value="600">600</option>'+
    '<option value="768">768</option>'+
    '<option value="800">800</option>'+
    '<option value="1080">1080</option>'+
        '<option value="1024">1024</option>'+
    '<option value="1200">1200</option>'+
    '</select><button type="submit">Modosit</button></form>' ;
}

function tipusmodositas()
{
    const tipus=document.getElementById("tipus");
    tipus.innerHTML="";
    tipus.innerHTML=" <form method=\'post\' action=\'\'><select name=\"tipus\" id=\"tipus\" style=\"margin-bottom:5px;\">\n" +
        "                    <option value=\" IPS\">IPS</option>\n" +
        "                    <option value=\" TN\">TN</option>\n" +
        "                    <option value=\" VA\">VA</option>\n" +
        "                </select><button type=\"submit\">Modosit</button></form>";
}
function Pixelmeretmodositas()
{

    const pix=document.getElementById("pixel");
    pix.innerHTML="";
    pix.innerHTML="<form method='post' action=''><input type=\"text\" name=\"pixel\" style=\"margin-bottom:5px;\" value=\"\" id=\"pix\"><button type='submit'>Modosit</button></form> ";

}

function Frissitesiidomodositas()
{
    const fris=document.getElementById("frissitesiido");
    fris.innerHTML="";
    fris.innerHTML="<form method='post' action=''><select name=\"frissitesiido\" id=\"frissitesiido\"style=\"margin-bottom:5px;\">\n" +
        "                    <option value=\"1 ms\">1 ms</option>\n" +
        "                    <option value=\"2 ms\">2 ms</option>\n" +
        "                    <option value=\"3 ms\">3 ms</option>\n" +
        "                    <option value=\"4 ms\">4 ms</option>\n" +
        "                    <option value=\"5 ms\">5 ms</option>\n" +
        "                    <option value=\"6 ms\">6 ms</option>\n" +
        "                    <option value=\"7 ms\">7 ms</option>\n" +
        "                </select><button type='submit'>Modosit</button></form> ";
}

function Keparanymodositas()
{
    const keparany=document.getElementById("keparany");
    keparany.innerHTML="";
    keparany.innerHTML="   <form method='post' action=''><select name=\"keparany\" id=\"keparany\" style=\"margin-bottom:5px;\">\n" +
        "                    <option value=\"16:9\">16:9</option>\n" +
        "                    <option value=\"16:10\">16:10</option>\n" +
        "                    <option value=\"21:9\">21:9</option>\n" +
        "                    <option value=\"32:9\">32:9</option>\n" +
        "                </select><button type='submit'>Modosit</button></form> ";
}
function Meretmodositas()
{
    const meret=document.getElementById("meretek");
    meret.innerHTML="";
    meret.innerHTML="<form method='post' action=''><label for=\"metrik\">Metrikus mérték</label><input type=\"radio\" name=\"metrik\" id=\"metrik\">" +
        "                <br><label for=\"inch\">Inch</label><input type=\"radio\"  name=\"inch\" id=\"inch\">" +
        "<br><label for=\"inchszelesseg\">Szélesség</label><input type=\"text\" style=\"width:80px;margin: 5px;\" name=\"inchszelesseg\" id=\"inchszelesseg\">"+
        "<br><label for=\"inchmagassag\">Magasság</label><input type=\"text\" style=\"width:80px; margin: 5px;\" name=\"inchmagassag\" id=\"inchmagassag\">"+
        "<br><label for=\"inchmelyseg\">Mélység</label><input type=\"text\" style=\"width:80px;margin: 5px\" value=\"\" name=\"inchmelyseg\" id=\"inchmelyseg\">"+
        "<button type='submit'>Modosit</button></form>";
}

function sulymodositas()
{
    const suly=document.getElementById("suly");
    suly.innerHTML="";
    suly.innerHTML="<form method='post' action=''><label for=\"suly\">Kg</label><input type=\"radio\"  name=\"kg\" id=\"kg\">\n"+
                   "<label for=\"lbs\">LBS</label><input type=\"radio\"  name=\"lbs\" id=\"lbs\">"+
    "<br><label for=\"ertek\">Súly</label><input type=\"text\" style=\" width:80px; margin: 5px;\" name=\"ertek\" id=\"ertek\"><button type='submit'>Modosit</button></form>";
}

function maxfogyasztasmodositas()
{
    const fogy=document.getElementById("maxfogyasztas");
    fogy.innerHTML="";
    fogy.innerHTML="<form method='post' action=''><input type=\"number\" id=\"maxfogyasztas\" name=\"maxfogyasztas\" style=\"width:60px;margin-bottom: 5px;\" minlength=\"20\" maxlength=\"40\"><button type='submit'>Modosit</button></form>";
}

function csatlakozomodositas()
{
    const cst=document.getElementById("csatlakozok");
    cst.innerHTML="";
    cst.innerHTML="<form method='post' action=''><label for=\"usb\">USB &nbsp;</label><input type=\"checkbox\" name=\"usb\" id=\"usb\"><label for=\"usbc\">&nbsp USB-C&nbsp;</label><input type=\"checkbox\" name=\"usbc\" id=\"usbc\">\n" +
        "                        <label for=\"hdmi\">HDMI &nbsp;</label><input type=\"checkbox\" name=\"hdmi\" id=\"hdmi\"> <label for=\"dvid\">&nbsp DVI-D &nbsp;</label><input type=\"checkbox\" name=\"dvid\" id=\"dvid\"><label for=\"vga\">&nbsp VGA&nbsp;</label><input type=\"checkbox\" name=\"vga\" id=\"vga\">\n" +
        "                        <label for=\"display\">Display &nbsp;</label><input type=\"checkbox\" name=\"display\" id=\"display\"><br><label for=\"full\">&nbsp Füllhallgató&nbsp;</label><input type=\"checkbox\" name=\"full\" id=\"full\">\n" +
        "                        <label for=\"mikrofon\">&nbsp Mikrofon &nbsp;</label><input type=\"checkbox\" name=\"mikrofon\" id=\"mikrofon\"><label for=\"hangszoro\">&nbsp Hangszoró &nbsp;</label><input type=\"checkbox\" name=\"hangszoro\" id=\"hangszoro\"><button type='submit'>Modosit</button></form>";
}

function hibamodositas()
{
    const hiba=document.getElementById("hiba");
    hiba.innerHTML="";
    hiba.innerHTML="<form method='post' action=''><input type=\"text\" name=\"hiba\" style=\"margin-bottom:5px;\" value=\"\" id=\"hiba\"><button type='submit'>Modosit</button></form>";
}

function garanciamodositas()
{
    const garancia=document.getElementById("garancia");
    garancia.innerHTML="";
    garancia.innerHTML="<form method='post' action=''><select name=\"garancia\" id=\"garancia\" style=\"margin-bottom:5px;\">" +
        "<option value=\"Van:\">Van</option>" +
        "<option value=\"Nincs\">Nincs</option>" +
        "</select><button type='submit'>Modosit</button></form>";
}

function armodositas()
{
    const hiba=document.getElementById("ar");
    hiba.innerHTML="";
    hiba.innerHTML="<form method='post' action=''><input type=\"text\" name=\"ar\" style=\"margin-bottom:5px;\" value=\"\" id=\"ar\"><button type='submit'>Modosit</button></form>";
}
function kepfrissites()
{
    const frissites=document.getElementById("kepfrissites");
    frissites.innerHTML="";
    frissites.innerHTML="<form method='post' action=''><input type='text' name='kepfrissites' style='margin-bottom:5px;' value='' id='kepfrissites'><button type='submit'>Modósit</button></form></button>";
}
