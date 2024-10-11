<?php
namespace app\model;

class Sqlfiles
{
    public static function GyartoAll()
{
    return "select * from gyarto;";
}

public static function findonegyartobyid()
{
    return "SELECT * FROM gyarto WHERE id = :id";
}

    public static function insert()
    {
        return "insert into `pc`(`gyarto`,`nev`,`processor`,`memoria`,`videokartya`,`hattertar`,`hattertar2`,`optikaimeghajto`,`usba`,`usbc`,`hdmi`,`vga`,`dvid`,`display`,`rj45`,`fullhalgato`,`mikrofon`,`hiba`,`ar`,`garancia`,`kep`,`oprendszer`,`keszlet`)value
                        (:gyarto,:nev,:processor,:memoria,:videokartya,:hattertar,:hattertar2,:optikaimeghajto,:usba,:usbc,:hdmi,:vga,:dvid,:display,:rj45,:fullhalgato,:mikrofon,:hiba,:ar,:garancia,:kep,:oprendszer,:keszlet)";
    }

    public static function insertgyarto()
{
    return "insert into `gyarto`(`nev`) value (:nev)";
}

public static function findonebyid()
{
    return "SELECT * FROM pc WHERE id = :id";
}
public static function findall()
{
    return "SELECT * FROM `pc` ORDER BY `pc`.`nev` ASC";
}

public static function MonitorAll()
{
    return "select * from `monitor` order by `monitor`.`nev` ASC";
}
 public static function MonitorfindOneById()
 {
     return "SELECT * FROM monitor WHERE id = :id";
 }
    public static function insertMonitor()
    {
        return "insert into `monitor`(`gyarto`,`nev`,`tipus`,`keparany`,`felbontas`,`pixel_meret`,`frissitesi_ido`,`max_fogyasztas`,`kep_frissites`,`szelesseg`,`magassag`,`melyseg`,`suly`,`usba`,`usbc`,`vga`,`hdmi`,`dvid`,`display_port`,`fullhallgato`,`mikrofon`,`kep`,`garancia`,`keszlet`,`hibak`,`ar`)value
                        (:gyarto,:nev,:tipus,:keparany,:felbontas,:pixelmeret,:frissitesiido,:maxfogyasztas,:kepfrissites,:szelesseg,:magassag,:melyseg,:suly,:usba,:usbc,:vga,:hdmi,:dvid,:display,:fullhalgato,:mikrofon,:kep,:garancia,:keszlet,:hibak,:ar)";
    }
public static function laptopinsert()
{
    return "insert into `laptop`(`gyarto`,`nev`,`processor`,`memoria`,`memoria2`,`videokartya`,`kijelzomeret`,`felbontasszelesseg`,`felbontasmagassag`,`tipus`,`hattertar1`,`hattertar2`,`oprendszer`,`optikaimeghajto`,`usba`,`usbc`,`vga`,`dvid`,`hdmi`,`display`,`rj45`,`fullhallgato`,`mikrofon`,`garancia`,`hiba`,`keszlet`,`ar`,`kep`)value 
                               (:gyarto,:nev,:processor,:memoria,:memoria2,:videokartya,:kijelzomeret,:felbontasszelesseg,:felbontasmagassag,:tipus,:hattertar1,:hattertar2,:oprendszer,:optikaimeghajto,:usba,:usbc,:vga,:dvid,:hdmi,:display,:rj45,:fullhallgato,:mikrofon,:garancia,:hiba,:keszlet,:ar,:kep)";
}
}