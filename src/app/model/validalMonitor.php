<?php

namespace app\model;

class validalMonitor
{
    public function createLoadable()
    {
        $loadable = [

            "gyarto",
            "nev",
            "tipus",
            "kijelzo",
            "felbontasszelesseg",
            "felbontasmagassag",
            "pix",
            "frissitesiido",
            "maxfogyasztas",
            "kepfrissites",
            "usba",
            "usbc",
            "vga",
            "hdmi",
            "dvid",
            "display",
            "fullhalgato",
            "mikrofon",
            "kep",
            "files",
            "garancia",
            "hiba",
            "keszlet",
            "ar"
        ];

        return $loadable;
    }
}