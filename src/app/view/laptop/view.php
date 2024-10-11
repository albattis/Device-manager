<?php
use app\model\Laptop;

/**
 * @var  Laptop[] $laptop
 */


?>

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
