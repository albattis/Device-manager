<?php


namespace app\model;


use db\Database;

class monitormodify
{

    public function nevmodositas($id, $ertek)
    {
        $conn = Database::getConnection();
        $sql = "UPDATE `monitor` SET `nev` = :nev WHERE `monitor`.`id` =:id";

        $statement = $conn->prepare($sql);
        $statement->execute([
            ':nev' => $ertek,
            ':id' => $id
        ]);
        return $statement->fetchObject(self::class);

    }

    public function felbontasmodositas($id, $szelsesseg, $magassag)
    {
        $felb = $szelsesseg . " x " . $magassag;
        $conn = Database::getConnection();
        $sql = "UPDATE `monitor` SET `felbontas` = :felbontas WHERE `monitor`.`id` =:id";
        $statemant = $conn->prepare($sql);
        $statemant->execute([
            ':felbontas' => $felb,
            ':id' => $id
        ]);
    }

    public function keszletmodositas($id, $ertek)
    {
        $conn = Database::getConnection();
        $sql = "UPDATE `monitor` SET `keszlet` = :keszlet WHERE `monitor`.`id` =:id";

        $statement = $conn->prepare($sql);
        $statement->execute([
            ':keszlet' => $ertek,
            ':id' => $id
        ]);
        return $statement->fetchObject(self::class);

    }

    public function tipusmodositas($id, $ertek)
        {
            $conn=Database::getConnection();
            $sql = "UPDATE `monitor` SET `tipus` = :tipus WHERE `monitor`.`id` =:id";
            $statement=$conn->prepare($sql);
            $statement->execute([
               'tipus'=>$ertek,
               'id'=>$id
            ]);
            return $statement->fetchObject(self::class);
        }

    public function pixelmodositas($id, $ertek)
    {
        $conn=Database::getConnection();
        $sql = "UPDATE `monitor` SET `pixel_meret` = :tipus WHERE `monitor`.`id` =:id";
        $statement=$conn->prepare($sql);
        $statement->execute([
            'tipus'=>$ertek,
            'id'=>$id
        ]);
        return $statement->fetchObject(self::class);
    }
    public function Frissitesiidomodositas($id, $ertek)
    {

        $conn=Database::getConnection();
        $sql = "UPDATE `monitor` SET `frissitesi_ido` =:frissitesi_ido WHERE `monitor`.`id` =:id";
        $statement=$conn->prepare($sql);
        $statement->execute([
            'frissitesi_ido'=>$ertek,
            'id'=>$id
        ]);
        return $statement->fetchObject(self::class);
    }
    public function Keparanymodositas($id,$ertek)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `monitor` SET `keparany` =:keparany WHERE `monitor`.`id` =:id";
        $statement=$conn->prepare($sql);
        $statement->execute([
            'keparany'=>$ertek,
            'id'=>$id
        ]);
        return $statement->fetchObject(self::class);
    }

    public function szelessegmetrikmodosit($id,$ertek)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `monitor` SET `szelesseg` =:szelesseg WHERE `monitor`.`id` =:id";
        $statement=$conn->prepare($sql);
        $statement->execute([
            'szelesseg'=>$ertek,
            'id'=>$id
        ]);
    }
    public function magassagmetrikmodosit($id,$ertek)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `monitor` SET `magassag` =:magassag WHERE `monitor`.`id` =:id";
        $statement=$conn->prepare($sql);
        $statement->execute([
            'magassag'=>$ertek,
            'id'=>$id
        ]);
    }
    public function melysegmetrikmodosit($id,$ertek)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `monitor` SET `melyseg` =:melyseg WHERE `monitor`.`id` =:id";
        $statement=$conn->prepare($sql);
        $statement->execute([
            'melyseg'=>$ertek,
            'id'=>$id
        ]);
    }

    public function sulymodosit($id, $ertek)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `monitor` SET `suly` =:suly WHERE `monitor`.`id` =:id";
        $statement=$conn->prepare($sql);
        $statement->execute([
            'suly'=>$ertek,
            'id'=>$id
        ]);
    }

    public function maxfogyasztasmodositas($id, $maxfogyasztas)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `monitor` SET `max_fogyasztas` =:fogyasztas WHERE `monitor`.`id` =:id";
        $statement=$conn->prepare($sql);
        $statement->execute([
            'fogyasztas'=>$maxfogyasztas,
            'id'=>$id
        ]);
    }

    public function usbmodositas($id,$ertek)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `monitor` SET `usba` =:usb WHERE `monitor`.`id` =:id";
        $statement=$conn->prepare($sql);
        $statement->execute([
            'usb'=>$ertek,
            'id'=>$id
        ]);
    }

    public function usbcmodositas($id, $ertek)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `monitor` SET `usbc` =:usbc WHERE `monitor`.`id` =:id";
        $statement=$conn->prepare($sql);
        $statement->execute([
            'usbc'=>$ertek,
            'id'=>$id
        ]);
    }

    public function hdmimodositas($id, $ertek)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `monitor` SET `hdmi` =:hdmi WHERE `monitor`.`id` =:id";
        $statement=$conn->prepare($sql);
        $statement->execute([
            'hdmi'=>$ertek,
            'id'=>$id
        ]);
    }

    public function vgamodositas($id, $ertek)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `monitor` SET `vga` =:vga WHERE `monitor`.`id` =:id";
        $statement=$conn->prepare($sql);
        $statement->execute([
            'vga'=>$ertek,
            'id'=>$id
        ]);
    }

    public function displaymodositas($id, $ertek)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `monitor` SET `display_port` =:display WHERE `monitor`.`id` =:id";
        $statement=$conn->prepare($sql);
        $statement->execute([
            'display'=>$ertek,
            'id'=>$id
        ]);
    }

    public function fulesmodositas($id, $ertek)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `monitor` SET `fullhallgato` =:fules WHERE `monitor`.`id` =:id";
        $statement=$conn->prepare($sql);
        $statement->execute([
            'fules'=>$ertek,
            'id'=>$id
        ]);
    }

    public function mikrofonmodositas($id, $ertek)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `monitor` SET `mikrofon` =:mikrofon WHERE `monitor`.`id` =:id";
        $statement=$conn->prepare($sql);
        $statement->execute([
            'mikrofon'=>$ertek,
            'id'=>$id
        ]);
    }

    public function hangszoromodositas($id, $ertek)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `monitor` SET `hangszoro` =:hangszoro WHERE `monitor`.`id` =:id";
        $statement=$conn->prepare($sql);
        $statement->execute([
            'hangszoro'=>$ertek,
            'id'=>$id
        ]);
    }

    public function hibamodositas($id, $hiba)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `monitor` SET `hibak` =:hiba WHERE `monitor`.`id` =:id";
        $statement=$conn->prepare($sql);
        $statement->execute([
            'hiba'=>$hiba,
            'id'=>$id
        ]);
    }

    public function garanciamodositas($id, $garancia)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `monitor` SET `garancia` =:garancia WHERE `monitor`.`id` =:id";
        $statement=$conn->prepare($sql);
        $statement->execute([
            'garancia'=>$garancia,
            'id'=>$id
        ]);
    }

    public function armodositas($id, $ar)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `monitor` SET `ar` =:ar WHERE `monitor`.`id` =:id";
        $statement=$conn->prepare($sql);
        $statement->execute([
            'ar'=>$ar,
            'id'=>$id
        ]);
    }

    public function dvidmodositas($id, $ertek)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `monitor` SET `dvid` =:dvid WHERE `monitor`.`id` =:id";
        $statement=$conn->prepare($sql);
        $statement->execute([
            'dvid'=>$ertek,
            'id'=>$id
        ]);
    }

    public function kepfrissitesmodositas($id,$ertek)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `monitor` SET `kep_frissites` =:kepfrissites WHERE `monitor`.`id` =:id";
        $statement=$conn->prepare($sql);
        $statement->execute([
            'kepfrissites'=>$ertek,
            'id'=>$id
        ]);
    }
}