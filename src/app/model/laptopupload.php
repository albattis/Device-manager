<?php

$imgs = $_FILES['img'];

$filescount = count($imgs['name']);
$id = $laptop->getId();
$path = "img/laptop/" . $id . "/";
if (!file_exists($path)) {
    mkdir($path, 0777);
}
for ($i = 0; $i < $filescount; $i++) {
    $filename = $path . basename($imgs["name"][$i]);


    if (!file_exists($filename)) {
        move_uploaded_file($imgs["tmp_name"][$i], $filename);
        $conn = \db\Database::getConnection();
        $ertek = $laptop->getKep() . $filename . ";";
        $sql = "UPDATE `laptop` SET `kep` =:kep WHERE `laptop`.`id` =:id";
        $statement = $conn->prepare($sql);
        $statement->execute([
            'kep' => $ertek,
            'id' => $id
        ]);
    }


}
