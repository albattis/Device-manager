<?php

include("./config.php");
$id=$_GET["id"];
$conn = \db\Database::getConnection();

$sql = "update `pc` set `keszlet`=:keszlet where `pc`.`id` =".$id.";";

$statement=$conn->prepare($sql);
$statement->execute();
