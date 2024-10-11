<?php
$imgs=$_FILES['img'];

$filescount=count($imgs['name']);
$id=$monitor->getId();
$path="img/monitor/".$id."/";
if(!file_exists($path)) {
    mkdir($path, 0777);
}
for ($i=0;$i<$filescount; $i++)
{
    $filename=$path.basename($imgs["name"][$i]);


    if(!file_exists($filename))
    {
        move_uploaded_file($imgs["tmp_name"][$i],$filename);
        $conn=\db\Database::getConnection();
        $ertek=$monitor->getKep().$filename.";";
        $sql="UPDATE `monitor` SET `kep` =:mikrofon WHERE `monitor`.`id` =:id";
        $statement=$conn->prepare($sql);
        $statement->execute([
            'mikrofon'=>$ertek,
            'id'=>$id
        ]);
    }



}

