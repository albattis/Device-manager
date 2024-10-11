<?php

namespace app\model;

class laptopvalidal
{

    public function createLoadable()
    {
        $loadable = [
            "gyarto",
            "nev",
            "processor",
            "memoria",
            "processorgyujto",
            "ddr",
            "ddrertek",
            "ddr2",
            "slot",
            "videokartya",
            "kijelzomeret",
            "felbontasszelesseg",
            "felbontasmagassag",
            "tipus",
            "tar",
            "tarmeret",
            "tar2",
            "tarmeret2",
            "oprendszer",
            "optikaimeghajto",
            "usba",
            "usbc",
            "vga",
            "dvid",
            "hdmi",
            "display",
            "rj45",
            "fullhalgato",
            "mikrofon",
            "garancia",
            "hiba",
            "keszlet",
            "ar",
            "kep"

        ];
        return $loadable;
    }

}
