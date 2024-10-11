<?php


namespace app\model;


use db\Database;

class laptopmodify
{

    public static function keszlet($id, $ertek)
    {
        $conn = Database::getConnection();
        $sql = "UPDATE `laptop` set `keszlet`=:keszlet where `laptop`.`id`=:id;";
        $statement = $conn->prepare($sql);
        $statement->execute([

            ':keszlet' => $ertek,
            ':id' => $id

        ]);
        return $statement->fetchObject(self::class);
    }

    public static function gyarto($id, $ertek)
    {
        $conn = Database::getConnection();
        $sql = "UPDATE `laptop` set `gyarto`=:gyarto where `laptop`.`id`=:id;";
        $statement = $conn->prepare($sql);
        $statement->execute([

            ':gyarto' => $ertek,
            ':id' => $id

        ]);
        return $statement->fetchObject(self::class);
    }

    public static function nev($id, $ertek)
    {
        $conn = Database::getConnection();
        $sql = "UPDATE `laptop` set `nev`=:nev where `laptop`.`id`=:id;";
        $statement = $conn->prepare($sql);
        $statement->execute([

            ':nev' => $ertek,
            ':id' => $id

        ]);
        return $statement->fetchObject(self::class);
    }

    public static function processor($id, $ertek)
    {
        $conn = Database::getConnection();
        $sql = "UPDATE `laptop` set `processor`=:processor where `laptop`.`id`=:id;";
        $statement = $conn->prepare($sql);
        $statement->execute([

            ':processor' => $ertek,
            ':id' => $id

        ]);
        return $statement->fetchObject(self::class);
    }

    public static function memoria($id, $ertek)
    {
        $conn = Database::getConnection();
        $sql = "UPDATE `laptop` set `memoria`=:memoria where `laptop`.`id`=:id;";
        $statement = $conn->prepare($sql);
        $statement->execute([

            ':memoria' => $ertek,
            ':id' => $id

        ]);
        return $statement->fetchObject(self::class);
    }

    public static function videokartya($id, $ertek)
    {
        $conn = Database::getConnection();
        $sql = "UPDATE `laptop` set `videokartya`=:videokartya where `laptop`.`id`=:id;";
        $statement = $conn->prepare($sql);
        $statement->execute([

            ':videokartya' => $ertek,
            ':id' => $id

        ]);
        return $statement->fetchObject(self::class);
    }

    public static function hdd($id, $tar, $tarmeret, $tar2, $tarmeret2)
    {
        $ertek2 = "";
        $ertek = $tarmeret . $tar;
        if ($tar2 != "" && $tarmeret2 != "") {
            $ertek2 = $tarmeret2 . $tar2;
        }
        $conn = Database::getConnection();
        $sql = "UPDATE `laptop` set `hattertar1`=:hattertar where `laptop`.`id`=:id;";
        $statement = $conn->prepare($sql);
        $statement->execute([

            ':hattertar' => $ertek,
            ':id' => $id

        ]);
        if ($ertek2 != "") {
            $conn = Database::getConnection();
            $sql = "UPDATE `laptop` set `hattertar2`=:processor where `laptop`.`id`=:id;";
            $statement = $conn->prepare($sql);
            $statement->execute([

                ':processor' => $ertek2,
                ':id' => $id

            ]);
        }else
        {
            $ertek2="Nincs";
            $conn = Database::getConnection();
            $sql = "UPDATE `laptop` set `hattertar2`=:processor where `laptop`.`id`=:id;";
            $statement = $conn->prepare($sql);
            $statement->execute([

                ':processor' => $ertek2,
                ':id' => $id

            ]);
        }
                return $statement->fetchObject(self::class);
    }


    public static function oprendszer($id, $ertek)
    {
        $conn = Database::getConnection();
        $sql = "UPDATE `laptop` set `oprendszer`=:oprendszer where `laptop`.`id`=:id;";
        $statement = $conn->prepare($sql);
        $statement->execute([

            ':oprendszer' => $ertek,
            ':id' => $id

        ]);
        return $statement->fetchObject(self::class);
    }


    public static function optikaimeghajto($id, $ertek)
    {
        $conn = Database::getConnection();
        $sql = "UPDATE `laptop` set `optikaimeghajto`=:optikaimeghajto where `laptop`.`id`=:id;";
        $statement = $conn->prepare($sql);
        $statement->execute([

            ':optikaimeghajto' => $ertek,
            ':id' => $id

        ]);
        return $statement->fetchObject(self::class);
    }

    public static function usbmodositas($id, $ertek)
    {
        $conn = Database::getConnection();
        $sql = "UPDATE `laptop` set `usba`=:usb where `laptop`.`id`=:id;";
        $statement = $conn->prepare($sql);
        $statement->execute([

            ':usb' => $ertek,
            ':id' => $id

        ]);
        return $statement->fetchObject(self::class);
    }


    public static function usbcmodositas($id, $ertek)
    {
        $conn = Database::getConnection();
        $sql = "UPDATE `laptop` set `usbc`=:usbc where `laptop`.`id`=:id;";
        $statement = $conn->prepare($sql);
        $statement->execute([

            ':usbc' => $ertek,
            ':id' => $id

        ]);
        return $statement->fetchObject(self::class);
    }

    public static function rj45($id, $ertek)
    {
        $conn = Database::getConnection();
        $sql = "UPDATE `laptop` set `rj45`=:rj45 where `laptop`.`id`=:id;";
        $statement = $conn->prepare($sql);
        $statement->execute([

            ':rj45' => $ertek,
            ':id' => $id

        ]);
        return $statement->fetchObject(self::class);
    }


    public static function hdmimodositas($id, $ertek)
    {
        $conn = Database::getConnection();
        $sql = "UPDATE `laptop` set `hdmi`=:hdmi where `laptop`.`id`=:id;";
        $statement = $conn->prepare($sql);
        $statement->execute([

            ':hdmi' => $ertek,
            ':id' => $id

        ]);
        return $statement->fetchObject(self::class);
    }

    public static function dvidmodositas($id, $ertek)
    {
        $conn = Database::getConnection();
        $sql = "UPDATE `laptop` set `dvid`=:dvid where `laptop`.`id`=:id;";
        $statement = $conn->prepare($sql);
        $statement->execute([

            ':dvid' => $ertek,
            ':id' => $id

        ]);
        return $statement->fetchObject(self::class);
    }


    public static function vgamodositas($id, $ertek)
    {
        $conn = Database::getConnection();
        $sql = "UPDATE `laptop` set `vga`=:vga where `laptop`.`id`=:id;";
        $statement = $conn->prepare($sql);
        $statement->execute([

            ':vga' => $ertek,
            ':id' => $id

        ]);
        return $statement->fetchObject(self::class);
    }


    public static function displaymodositas($id, $ertek)
    {
        $conn = Database::getConnection();
        $sql = "UPDATE `laptop` set `display`=:display where `laptop`.`id`=:id;";
        $statement = $conn->prepare($sql);
        $statement->execute([

            ':display' => $ertek,
            ':id' => $id

        ]);
        return $statement->fetchObject(self::class);
    }


    public static function fulesmodositas($id, $ertek)
    {
        $conn = Database::getConnection();
        $sql = "UPDATE `laptop` set `fullhallgato`=:fullhalgato where `laptop`.`id`=:id;";
        $statement = $conn->prepare($sql);
        $statement->execute([

            ':fullhalgato' => $ertek,
            ':id' => $id

        ]);
        return $statement->fetchObject(self::class);
    }

    public static function mikrofonmodositas($id, $ertek)
    {
        $conn = Database::getConnection();
        $sql = "UPDATE `laptop` set `mikrofon`=:mikrofon where `laptop`.`id`=:id;";
        $statement = $conn->prepare($sql);
        $statement->execute([

            ':mikrofon' => $ertek,
            ':id' => $id

        ]);
        return $statement->fetchObject(self::class);
    }


    public static function hiba($id, $ertek)
    {
        $conn = Database::getConnection();
        $sql = "UPDATE `laptop` set `hiba`=:hiba where `laptop`.`id`=:id;";
        $statement = $conn->prepare($sql);
        $statement->execute([

            ':hiba' => $ertek,
            ':id' => $id

        ]);
        return $statement->fetchObject(self::class);
    }

    public static function garancia($id, $ertek)
    {
        $conn = Database::getConnection();
        $sql = "UPDATE `laptop` set `garancia`=:garancia where `laptop`.`id`=:id;";
        $statement = $conn->prepare($sql);
        $statement->execute([

            ':garancia' => $ertek,
            ':id' => $id

        ]);
        return $statement->fetchObject(self::class);
    }

    public static function ar($id, $ertek)
    {
        $conn = Database::getConnection();
        $sql = "UPDATE `laptop` set `ar`=:ar where `laptop`.`id`=:id;";
        $statement = $conn->prepare($sql);
        $statement->execute([

            ':ar' => $ertek,
            ':id' => $id

        ]);
        return $statement->fetchObject(self::class);
    }

}
