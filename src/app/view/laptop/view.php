<?php
use app\model\Laptop;

/**
 * @var  Laptop[] $laptop
 */


?>
<div class="container-fluid">
    <div class="row">
    <div class="col-3" style="margin-left:100px;"><a href="http://localhost/insert/index.php?controller=laptop&action=index"><img src="./img/back.png" style="display:inline-block; margin-right: auto; width:100px; height: 100px;"></a>
</div>
    </div>
</div>
<h1>Laptopjaink</h1>



<div class="container">
    <div class="row">

        <?php foreach($laptop as $laptops):?>

            <div class="col-md-3">

                <a href="index.php?controller=Laptop&action=Laptop&id=<?=$laptops->getId()?>">

                    <?php
                    $kepdarabok=explode(';',$laptops->getKep());


                    if(!empty($kepdarabok))

                    {?> <img alt="" class="pcimg img-thumbnail"  src="<?=$kepdarabok[0]?>"><?php
                    }

                    ?>

                </a>
                <h2><?=$laptops->getNev()?></h2>

                <p>

                    Ár: <?= number_format($laptops->getAr(),2,".",' ');?>Ft
                </p>


            </div>
        <?php endforeach;?>

    </div>
</div>
