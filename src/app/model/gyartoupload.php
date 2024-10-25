<?php

use app\model\Gyarto;



$imgs=$_FILES;

$gyarto=new Gyarto();
$gyarto= Gyarto::findOneByName($_POST["gyartonev"]);


$id=$gyarto->getId();
$path="img/gyartok/";
$filename=$path.$gyarto->getId().".png";
var_dump($filename);

    if(!file_exists($filename))
    {

        move_uploaded_file($imgs["files"]["tmp_name"],$filename);
        $conn=\db\Database::getConnection();

        $sql="UPDATE `gyarto` SET `kep` =:kep WHERE `gyarto`.`id` =:id";
        $statement=$conn->prepare($sql);
        $statement->execute([
            'kep'=>$filename,
            'id'=>$id
        ]);
    }




