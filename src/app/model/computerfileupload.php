<?php

$imgs = $_FILES['img'];

$filescount = count($imgs['name']);
$id = $pc->getId();
$path = "img/pc/" . $id . "/";
if (!file_exists($path)) {
    mkdir($path, 0777);
}
for ($i = 0; $i < $filescount; $i++) {
    $filename = $path . basename($imgs["name"][$i]);


    if (!file_exists($filename)) {
        move_uploaded_file($imgs["tmp_name"][$i], $filename);
        $conn = \db\Database::getConnection();
        $ertek = $pc->getKep() . $filename . ";";
        $sql = "UPDATE `pc` SET `kep` =:kep WHERE `pc`.`id` =:id";
        $statement = $conn->prepare($sql);
        $statement->execute([
            'kep' => $ertek,
            'id' => $id
        ]);
    }


}
