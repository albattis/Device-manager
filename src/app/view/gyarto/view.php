<?php


use app\model\Gyarto;

$eredmeny=true;
/**
 * @var Gyarto[] $gyarto
 */
function refreshpage()
{
    header("Location:$_SERVER[REQUEST_URI]");
}



if(!empty($_POST["gyartonev"])) {
    foreach ($gyarto as $a) {
        if ($a->getNev() == $_POST["gyartonev"])
        { $eredmeny = false;

    }
    }
    if ($eredmeny) {
        include("src\app\model\gyartocreate.php");

        if (!empty($_FILES["files"]["tmp_name"])) {
            include("src\app\model\gyartoupload.php");

            refreshpage();

    } else {
        ?><script>window.alert("Van már ilyen gyártó");</script> <?php ;
    }
}
}
?>

<div class="container">

    <div class="row">

        <div class="col-md-6 col-sm-12" style="border: 1px solid lightskyblue; padding:5px 0px 0px 5px ;">
            <form action="" method="post"enctype="multipart/form-data">
                <label for="gyartonev">Gyártó neve:</label><input type="text" style="margin-left:10px;"id="gyartonev" name="gyartonev">
                <input type="file" accept=".jpg,.jpeg,.png" id="files" name="files">
                <br><button type="submit">Új gyártó felvétele</button>
            </form>
        </div>
    </div>


    <div class="row">
        <?php

        foreach ($gyarto as $gyartok):?>
        <div class="col-md-3 col-sm-12">
            <h1><?= $gyartok->getNev()?></h1>
            <img class="kepstyle" src="./img/gyartok/<?=$gyartok->getId()?>.jpg">
        </div>

        <?php endforeach;?>
    </div>
</div>
