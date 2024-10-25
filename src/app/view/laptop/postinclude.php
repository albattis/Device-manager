<?php

if(!empty($_POST))
{
if($_POST["keszlet"]=="Van")
{
$laptopmodosit->keszlet($laptop->getId(),"Nincs");

}else
{
$laptopmodosit->keszlet($laptop->getId(),"Van");
}

if(!empty($_POST["nev"]))
{
$laptopmodosit->nev($laptop->getId(),$_POST["nev"]);
}

if(!empty($_POST["processor"]))
{
$laptopmodosit->processor($laptop->getId(),$_POST["processor"]);
}

if(!empty($_POST["ddr"]&&!empty($_POST["ddrertek"])))
{
if($_POST["slot"]!="e"&&$_POST["ddr2"]!="e")
{$memoria=$_POST["ddrertek"]." GB ".$_POST["ddr"]." ".$_POST["slot"]."GB ".$_POST["ddr2"];}
else
{
$memoria=$_POST["ddrertek"]."Gb ".$_POST["ddr"];
}
$laptopmodosit->memoria($laptop->getId(),$memoria);
}
if(!empty($_POST["videokartya"]))
{
$laptopmodosit->videokartya($laptop->getId(),$_POST["videokartya"]);
}
if(!empty($_POST["felbontasszelesseg"]))
    {
        $laptopmodosit->felbontasszelesseg($laptop->getId(),$_POST["felbontasszelesseg"]);
    }
    if(!empty($_POST["felbontasmagassag"]))
    {
        $laptopmodosit->felbontasmagassag($laptop->getId(),$_POST["felbontasmagassag"]);
    }
if(!empty($_POST["tar"]&&!empty($_POST["tarmeret"])))
{
$tar=$_POST["tar"];
$tarmeret=$_POST["tarmeret"];
$tar2="";
$tarmeret2="";
if($_POST["tar2"]!="e"){$tar2=$_POST["tar2"];}

if($_POST["tarmeret2"]!="e"){$tarmeret2=$_POST["tarmeret2"];}
$laptopmodosit->hdd($laptop->getId(),$tar,$tarmeret,$tar2,$tarmeret2);
}
if(!empty($_POST["oprendszer"]))
{
$laptopmodosit->oprendszer($laptop->getId(),$_POST["oprendszer"]);
}
if(!empty($_POST["optikaimeghajto"]))
{
$laptopmodosit->optikaimeghajto($laptop->getId(),$_POST["optikaimeghajto"]);
}

if(!empty($_POST["usb"])||!empty($_POST["usbc"])||!empty($_POST["rj45"])||!empty($_POST["hdmi"])||!empty($_POST["vga"])||!empty($_POST["dvid"])||!empty($_POST["display"])||!empty($_POST["full"])||!empty($_POST["mikrofon"])) {

if ($_POST["usb"] == "on") {
$laptopmodosit->usbmodositas($laptop->getId(), "Van");
} else {
$laptopmodosit->usbmodositas($laptop->getId(), "Nincs");
}


if ($_POST["rj45"] == "on") {
$laptopmodosit->rj45($laptop->getId(), "Van");
} else {
$laptopmodosit->rj45($laptop->getId(), "Nincs");
}
if ($_POST["usbc"] == "on") {
$laptopmodosit->usbcmodositas($laptop->getId(), "Van");
} else {
$laptopmodosit->usbcmodositas($laptop->getId(), "Nincs");
}

if ($_POST["hdmi"] == "on") {
$laptopmodosit->hdmimodositas($laptop->getId(), "Van");
} else {
$laptopmodosit->hdmimodositas($laptop->getId(), "Nincs");
}
if($_POST["dvid"]=="on")
{
$laptopmodosit->dvidmodositas($laptop->getId(),"Van");
}else
{
$laptopmodosit->dvidmodositas($laptop->getId(),"Nincs");
}

if ($_POST["vga"] == "on") {
$laptopmodosit->vgamodositas($laptop->getId(), "Van");
} else {
$laptopmodosit->vgamodositas($laptop->getId(), "Nincs");
}


if ($_POST["display"] == "on") {
$laptopmodosit->displaymodositas($laptop->getId(), "Van");
} else {
$laptopmodosit->displaymodositas($laptop->getId(), "Nincs");
}


if ($_POST["full"] == "on") {

$laptopmodosit->fulesmodositas($laptop->getId(), "Van");
} else {
$laptopmodosit->fulesmodositas($laptop->getId(), "Nincs");
}


if ($_POST["mikrofon"] == "on") {
$laptopmodosit->mikrofonmodositas($laptop->getId(), "Van");
} else {
$laptopmodosit->mikrofonmodositas($laptop->getId(), "Nincs");
}



}

if(!empty($_POST["hiba"]))
{
$laptopmodosit->hiba($laptop->getId(),$_POST["hiba"]);
}
if(!empty($_POST["garancia"]))
{
$laptopmodosit->garancia($laptop->getId(),$_POST["garancia"]);
}
if(!empty($_POST["ar"]))
{
$laptopmodosit->ar($laptop->getId(),$_POST["ar"]);
}

if(!empty($_POST["gyarto"]))
{
$laptopmodosit->gyarto($laptop->getId(),$_POST["gyarto"]);
}

refreshpage();
}

