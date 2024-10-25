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

        <div class="col-md-6 col-sm-12" style=" border: 2px solid lightskyblue; padding:5px 0px 0px 5px ;">
            <form action="" method="post"enctype="multipart/form-data">
                <label for="gyartonev">Gyártó neve:</label><input type="text" style="margin-left:10px;"id="gyartonev" name="gyartonev">
                <input type="file" accept=".png" id="files" name="files">
                <br><button type="submit">Új gyártó felvétele</button>
            </form>
        </div>
        <div class="col-md-6 col-sm-12">
            <div id="modosit">

            </div>
        </div>
    </div>


    <div class="row">
        <?php

        foreach ($gyarto as $gyartok):?>
        <div class="col-md-3 col-sm-12">
            <button style="width:250px; height:250px;" onclick="modosit()"><h1><?= $gyartok->getNev()?></h1>
            <img class="kepstyle" src="./img/gyartok/<?=$gyartok->getId()?>.png">
            </button></div>

        <?php endforeach;?>
    </div>
</div>
<script>
    function modosit()
    {
        const mod=document.getElementById("modosit");
        mod.innerHTML="";
        mod.innerHTML="<form action='' method='post' enctype=\"multipart/form-data\">" +
            '<label for=\"gyartonev\">Gyártó neve:</label><input type=\"text\" style=\"margin-left:10px;\" id=\"gyartonev\" name=\"gyartonev\">'+
        '<input type=\"file\" accept=\".png\" id=\"files\" name=\"files\">'+
            '<br><button type=\"submit\">Gyártó modósitás</button>'+
            '</form>';
    }
</script>