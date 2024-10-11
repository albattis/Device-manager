<?php


namespace app\model;


use db\Database;

class pcmodify
{

    public static function keszlet($id,$ertek)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `pc` set `keszlet`=:keszlet where `pc`.`id`=:id;";
        $statement=$conn->prepare($sql);
        $statement->execute([

            ':keszlet'=>$ertek,
            ':id'=>$id

        ]);
        return $statement->fetchObject(self::class);
    }

    public static function gyarto($id,$ertek)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `pc` set `gyarto`=:gyarto where `pc`.`id`=:id;";
        $statement=$conn->prepare($sql);
        $statement->execute([

            ':gyarto'=>$ertek,
            ':id'=>$id

        ]);
        return $statement->fetchObject(self::class);
    }

    public static function nev($id,$ertek)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `pc` set `nev`=:nev where `pc`.`id`=:id;";
        $statement=$conn->prepare($sql);
        $statement->execute([

            ':nev'=>$ertek,
            ':id'=>$id

        ]);
        return $statement->fetchObject(self::class);
    }

    public static function processor($id,$ertek)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `pc` set `processor`=:processor where `pc`.`id`=:id;";
        $statement=$conn->prepare($sql);
        $statement->execute([

            ':processor'=>$ertek,
            ':id'=>$id

        ]);
        return $statement->fetchObject(self::class);
    }
   public static function memoria($id,$ertek)
   {
       $conn=Database::getConnection();
       $sql="UPDATE `pc` set `memoria`=:memoria where `pc`.`id`=:id;";
       $statement=$conn->prepare($sql);
       $statement->execute([

           ':memoria'=>$ertek,
           ':id'=>$id

       ]);
       return $statement->fetchObject(self::class);
   }

    public static function videokartya($id,$ertek)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `pc` set `videokartya`=:videokartya where `pc`.`id`=:id;";
        $statement=$conn->prepare($sql);
        $statement->execute([

            ':videokartya'=>$ertek,
            ':id'=>$id

        ]);
        return $statement->fetchObject(self::class);
    }
public static function hdd($id,$tar,$tarmeret,$tar2,$tarmeret2)
{
    $ertek2="";
    $ertek=$tarmeret." GB ".$tar;
    if($tar2!=""&&$tarmeret2!="")
    {
        $ertek2=$tarmeret2." GB ".$tar2;
    }
    $conn=Database::getConnection();
    $sql="UPDATE `pc` set `hattertar`=:hattertar where `pc`.`id`=:id;";
    $statement=$conn->prepare($sql);
    $statement->execute([

        ':hattertar'=>$ertek,
        ':id'=>$id

    ]);
    if($ertek2!="")
    {
        $conn=Database::getConnection();
        $sql="UPDATE `pc` set `hattertar2`=:processor where `pc`.`id`=:id;";
        $statement=$conn->prepare($sql);
        $statement->execute([

            ':processor'=>$ertek2,
            ':id'=>$id

        ]);
    }
    return $statement->fetchObject(self::class);
}


    public static function oprendszer($id,$ertek)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `pc` set `oprendszer`=:oprendszer where `pc`.`id`=:id;";
        $statement=$conn->prepare($sql);
        $statement->execute([

            ':oprendszer'=>$ertek,
            ':id'=>$id

        ]);
        return $statement->fetchObject(self::class);
    }


    public static function optikaimeghajto($id,$ertek)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `pc` set `optikaimeghajto`=:optikaimeghajto where `pc`.`id`=:id;";
        $statement=$conn->prepare($sql);
        $statement->execute([

            ':optikaimeghajto'=>$ertek,
            ':id'=>$id

        ]);
        return $statement->fetchObject(self::class);
    }

        public static function usbmodositas($id,$ertek)
        {
            $conn=Database::getConnection();
            $sql="UPDATE `pc` set `usba`=:usb where `pc`.`id`=:id;";
            $statement=$conn->prepare($sql);
            $statement->execute([

                ':usb'=>$ertek,
                ':id'=>$id

            ]);
            return $statement->fetchObject(self::class);
        }



        public static function usbcmodositas($id,$ertek)
        {
            $conn=Database::getConnection();
            $sql="UPDATE `pc` set `usbc`=:usbc where `pc`.`id`=:id;";
            $statement=$conn->prepare($sql);
            $statement->execute([

                ':usbc'=>$ertek,
                ':id'=>$id

            ]);
            return $statement->fetchObject(self::class);
        }

    public static function rj45($id,$ertek)
    {
        $conn=Database::getConnection();
        $sql="UPDATE `pc` set `rj45`=:rj45 where `pc`.`id`=:id;";
        $statement=$conn->prepare($sql);
        $statement->execute([

            ':rj45'=>$ertek,
            ':id'=>$id

        ]);
        return $statement->fetchObject(self::class);
    }


    public static function hdmimodositas($id,$ertek)
       {
           $conn=Database::getConnection();
           $sql="UPDATE `pc` set `hdmi`=:hdmi where `pc`.`id`=:id;";
           $statement=$conn->prepare($sql);
           $statement->execute([

               ':hdmi'=>$ertek,
               ':id'=>$id

           ]);
           return $statement->fetchObject(self::class);
       }

       public static function dvidmodositas($id,$ertek)
       {
           $conn=Database::getConnection();
           $sql="UPDATE `pc` set `dvid`=:dvid where `pc`.`id`=:id;";
           $statement=$conn->prepare($sql);
           $statement->execute([

               ':dvid'=>$ertek,
               ':id'=>$id

           ]);
           return $statement->fetchObject(self::class);
       }


        public static function vgamodositas($id,$ertek)
        {
            $conn=Database::getConnection();
            $sql="UPDATE `pc` set `vga`=:vga where `pc`.`id`=:id;";
            $statement=$conn->prepare($sql);
            $statement->execute([

                ':vga'=>$ertek,
                ':id'=>$id

            ]);
            return $statement->fetchObject(self::class);
        }


        public static function displaymodositas($id,$ertek)
        {
            $conn=Database::getConnection();
            $sql="UPDATE `pc` set `display`=:display where `pc`.`id`=:id;";
            $statement=$conn->prepare($sql);
            $statement->execute([

                ':display'=>$ertek,
                ':id'=>$id

            ]);
            return $statement->fetchObject(self::class);
        }




        public static function fulesmodositas($id,$ertek)
        {
            $conn=Database::getConnection();
            $sql="UPDATE `pc` set `fullhalgato`=:fullhalgato where `pc`.`id`=:id;";
            $statement=$conn->prepare($sql);
            $statement->execute([

                ':fullhalgato'=>$ertek,
                ':id'=>$id

            ]);
            return $statement->fetchObject(self::class);
        }

        public static function mikrofonmodositas($id,$ertek)
        {
            $conn=Database::getConnection();
            $sql="UPDATE `pc` set `mikrofon`=:mikrofon where `pc`.`id`=:id;";
            $statement=$conn->prepare($sql);
            $statement->execute([

                ':mikrofon'=>$ertek,
                ':id'=>$id

            ]);
            return $statement->fetchObject(self::class);
        }



    public static function hiba($id,$ertek)
        {
            $conn=Database::getConnection();
            $sql="UPDATE `pc` set `hiba`=:hiba where `pc`.`id`=:id;";
            $statement=$conn->prepare($sql);
            $statement->execute([

                ':hiba'=>$ertek,
                ':id'=>$id

            ]);
            return $statement->fetchObject(self::class);
        }

    public static function garancia($id,$ertek)
        {
            $conn=Database::getConnection();
            $sql="UPDATE `pc` set `garancia`=:garancia where `pc`.`id`=:id;";
            $statement=$conn->prepare($sql);
            $statement->execute([

                ':garancia'=>$ertek,
                ':id'=>$id

            ]);
            return $statement->fetchObject(self::class);
        }

    public static function ar($id,$ertek)
        {
            $conn=Database::getConnection();
            $sql="UPDATE `pc` set `ar`=:ar where `pc`.`id`=:id;";
            $statement=$conn->prepare($sql);
            $statement->execute([

                ':ar'=>$ertek,
                ':id'=>$id

            ]);
            return $statement->fetchObject(self::class);
        }

}