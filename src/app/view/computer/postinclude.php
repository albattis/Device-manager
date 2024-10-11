<?php
if(!empty($_POST))
{
    if($_POST["keszlet"]=="Van")
    {
        $pcmodosit->keszlet($pc->getId(),"Nincs");

    }else
    {
        $pcmodosit->keszlet($pc->getId(),"Van");
    }

    if(!empty($_POST["nev"]))
    {
        $pcmodosit->nev($pc->getId(),$_POST["nev"]);
    }

   if(!empty($_POST["processor"]))
   {
       $pcmodosit->processor($pc->getId(),$_POST["processor"]);
   }

    if(!empty($_POST["ddr"]&&!empty($_POST["ddrertek"])))
    {
        if($_POST["slot"]!="e"&&$_POST["ddr2"]!="e")
        {$memoria=$_POST["ddrertek"]." GB ".$_POST["ddr"]." ".$_POST["slot"]."GB ".$_POST["ddr2"];}
        else
            {
                $memoria=$_POST["ddrertek"]."Gb ".$_POST["ddr"];
            }
    $pcmodosit->memoria($pc->getId(),$memoria);
    }
if(!empty($_POST["videokartya"]))
    {
        $pcmodosit->videokartya($pc->getId(),$_POST["videokartya"]);
    }

if(!empty($_POST["tar"]&&!empty($_POST["tarmeret"])))
{
    $tar=$_POST["tar"];
    $tarmeret=$_POST["tarmeret"];
    $tar2="";
    $tarmeret2="";
    if($_POST["tar2"]!="e"){$tar2=$_POST["tar2"];}

    if($_POST["tarmeret2"]!="e"){$tarmeret2=$_POST["tarmeret2"];}
    $pcmodosit->hdd($pc->getId(),$tar,$tarmeret,$tar2,$tarmeret2);
}
if(!empty($_POST["oprendszer"]))
{
    $pcmodosit->oprendszer($pc->getId(),$_POST["oprendszer"]);
}
if(!empty($_POST["optikaimeghajto"]))
{
    $pcmodosit->optikaimeghajto($pc->getId(),$_POST["optikaimeghajto"]);
}

    if(!empty($_POST["usb"])||!empty($_POST["usbc"])||!empty($_POST["rj45"])||!empty($_POST["hdmi"])||!empty($_POST["vga"])||!empty($_POST["dvid"])||!empty($_POST["display"])||!empty($_POST["full"])||!empty($_POST["mikrofon"])) {

        if ($_POST["usb"] == "on") {
            $pcmodosit->usbmodositas($pc->getId(), "Van");
        } else {
            $pcmodosit->usbmodositas($pc->getId(), "Nincs");
        }


        if ($_POST["rj45"] == "on") {
            $pcmodosit->rj45($pc->getId(), "Van");
        } else {
            $pcmodosit->rj45($pc->getId(), "Nincs");
        }
        if ($_POST["usbc"] == "on") {
            $pcmodosit->usbcmodositas($pc->getId(), "Van");
        } else {
            $pcmodosit->usbcmodositas($pc->getId(), "Nincs");
        }

        if ($_POST["hdmi"] == "on") {
            $pcmodosit->hdmimodositas($pc->getId(), "Van");
        } else {
            $pcmodosit->hdmimodositas($pc->getId(), "Nincs");
        }
        if($_POST["dvid"]=="on")
        {
            $pcmodosit->dvidmodositas($pc->getId(),"Van");
        }else
        {
            $pcmodosit->dvidmodositas($pc->getId(),"Nincs");
        }

        if ($_POST["vga"] == "on") {
            $pcmodosit->vgamodositas($pc->getId(), "Van");
        } else {
            $pcmodosit->vgamodositas($pc->getId(), "Nincs");
        }


        if ($_POST["display"] == "on") {
            $pcmodosit->displaymodositas($pc->getId(), "Van");
        } else {
            $pcmodosit->displaymodositas($pc->getId(), "Nincs");
        }


        if ($_POST["full"] == "on") {

            $pcmodosit->fulesmodositas($pc->getId(), "Van");
        } else {
            $pcmodosit->fulesmodositas($pc->getId(), "Nincs");
        }


        if ($_POST["mikrofon"] == "on") {
            $pcmodosit->mikrofonmodositas($pc->getId(), "Van");
        } else {
            $pcmodosit->mikrofonmodositas($pc->getId(), "Nincs");
        }



    }

    if(!empty($_POST["hiba"]))
    {
        $pcmodosit->hiba($pc->getId(),$_POST["hiba"]);
    }
if(!empty($_POST["garancia"]))
{
    $pcmodosit->garancia($pc->getId(),$_POST["garancia"]);
}
    if(!empty($_POST["ar"]))
    {
        $pcmodosit->ar($pc->getId(),$_POST["ar"]);
    }

    if(!empty($_POST["gyarto"]))
    {
        $pcmodosit->gyarto($pc->getId(),$_POST["gyarto"]);
    }

    refreshpage();
}

