<?php

if((!empty($_POST))) {
    if (!empty($_POST["keszlet"])) {
        if($_POST["keszlet"]=="Nincs"){$modify->keszletmodositas($monitor->getId(), "Van");
        }
        else{$modify->keszletmodositas($monitor->getId(), "Nincs");
        }

    }
}
if((!empty($_POST)))
{
    if (!empty($_POST["nev"]))
    {
        if(!$_POST["nev"]==""){$modify->nevmodositas($monitor->getId(), $_POST["nev"]);

        }

    }
    if(!empty($_POST["felbontasszelesseg"])!=""&&!empty($_POST["felbontasmagassag"]))
    {
        $modify->felbontasmodositas($monitor->getId(),$_POST["felbontasszelesseg"],$_POST["felbontasmagassag"]);

    }
    if(!empty($_POST["tipus"]))
    {
        $modify->tipusmodositas($monitor->getId(),$_POST["tipus"]);

    }
    if(!empty($_POST["pixel"]))
    {
        $modify->pixelmodositas($monitor->getId(),$_POST["pixel"]);


    }
    if(!empty($_POST["frissitesiido"]))
    {
        $modify->Frissitesiidomodositas($monitor->getId(),$_POST["frissitesiido"]);


    }
    if(!empty($_POST["keparany"]))
    {
        $modify->keparanymodositas($monitor->getId(),$_POST["keparany"]);

    }
    if(!empty($_POST["metrik"]||!empty($_POST["inch"])))
    {
        if($_POST["inchszelesseg"]!="")
            if(!empty($_POST["metrik"]))
            {
                $modify->szelessegmetrikmodosit($monitor->getId(),$_POST["inchszelesseg"]);

            }else{
                $ertek=$_POST["inchszelesseg"]*2.54;
                $modify->szelessegmetrikmodosit($monitor->getId(),$ertek);

            }
        if($_POST["inchmagassag"]!="")
            if(!empty($_POST["metrik"]))
            {
                $modify->magassagmetrikmodosit($monitor->getId(),$_POST["inchmagassag"]);

            }else{
                $ertek=$_POST["inchmagassag"]*2.54;
                $modify->magassagmetrikmodosit($monitor->getId(),$ertek);

            }
        if($_POST["inchmelyseg"]!="")
            if(!empty($_POST["metrik"]))
            {
                $modify->melysegmetrikmodosit($monitor->getId(),$_POST["inchmelyseg"]);

            }else{
                $ertek=$_POST["inchmelyseg"]*2.54;
                $modify->melysegmetrikmodosit($monitor->getId(),$ertek);

            }
    }
    if(!empty($_POST["kg"])||!empty($_POST["lbs"]))
    {
        $ertek;
        if($_POST["kg"]!="")
        {
            $modify->sulymodosit($monitor->getId(),$_POST["ertek"]);
        }
        else
        {
            $ertek=$_POST["ertek"]*0.54;
            $modify->sulymodosit($monitor->getId(),$ertek);
        }

    }
    if(!empty($_POST["maxfogyasztas"]))
    {
        $modify->maxfogyasztasmodositas($monitor->getId(),$_POST["maxfogyasztas"]);
    }
    if(!empty($_POST["usb"])||!empty($_POST["usbc"])||!empty($_POST["hdmi"])||!empty($_POST["vga"])||!empty($_POST["dvid"])||!empty($_POST["display"])||!empty($_POST["full"])||!empty($_POST["mikrofon"])||!empty($_POST["hangszoro"])) {

        if ($_POST["usb"] == "on") {
            $modify->usbmodositas($monitor->getId(), "Van");
        } else {
            $modify->usbmodositas($monitor->getId(), "Nincs");
        }


        if ($_POST["usbc"] == "on") {
            $modify->usbcmodositas($monitor->getId(), "Van");
        } else {
            $modify->usbcmodositas($monitor->getId(), "Nincs");
        }


        if ($_POST["hdmi"] == "on") {
            $modify->hdmimodositas($monitor->getId(), "Van");
        } else {
            $modify->hdmimodositas($monitor->getId(), "Nincs");
        }
        if($_POST["dvid"]=="on")
        {
            $modify->dvidmodositas($monitor->getId(),"Van");
        }else
        {
            $modify->dvidmodositas($monitor->getId(),"Nincs");
        }

        if ($_POST["vga"] == "on") {
            $modify->vgamodositas($monitor->getId(), "Van");
        } else {
            $modify->vgamodositas($monitor->getId(), "Nincs");
        }


        if ($_POST["display"] == "on") {
            $modify->displaymodositas($monitor->getId(), "Van");
        } else {
            $modify->displaymodositas($monitor->getId(), "Nincs");
        }


        if ($_POST["full"] == "on") {

            $modify->fulesmodositas($monitor->getId(), "Van");
        } else {
            $modify->fulesmodositas($monitor->getId(), "Nincs");
        }


        if ($_POST["mikrofon"] == "on") {
            $modify->mikrofonmodositas($monitor->getId(), "Van");
        } else {
            $modify->mikrofonmodositas($monitor->getId(), "Nincs");
        }


        if ($_POST["hangszoro"] == "on") {
            $modify->hangszoromodositas($monitor->getId(), "Van");
        } else {
            $modify->hangszoromodositas($monitor->getId(), "Nincs");
        }
    }
    if(!empty($_POST["hiba"]))
            {

                $modify->hibamodositas($monitor->getId(),$_POST["hiba"]);
            }
if(!empty($_POST["garancia"]))
{
    $modify->garanciamodositas($monitor->getId(),$_POST["garancia"]);
}
if(!empty($_POST["ar"]))
{
    $modify->armodositas($monitor->getId(),$_POST["ar"]);
}
if(!empty($_POST["kepfrissites"]))
{
    $modify->kepfrissitesmodositas($monitor->getId(),$_POST["kepfrissites"]);
}
   refreshpage();
}

?>
