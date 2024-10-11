<?php

use app\model\Computer;
/**
 * @var Computer[] $computer
 *
 */

?>


            <h1>Jelenlegi gépeink</h1>


<div class="container">
    <div class="row">
        <?php foreach ($computer as $computers):?>
            <div class="col-lg-3 pck">

                <a href="index.php?controller=Computer&action=Pc&id=<?=$computers->getId()?>">
                    <?php
                    $kepdarabok=explode(';',$computers->getKep());


                    if(!empty($kepdarabok))

                    {?> <img alt="" class="pcimg img-thumbnail"  src="<?=$kepdarabok[0]?>"><?php
                    }

                    ?>
                </a>
                <h2><?=$computers->getNev()?></h2>

                <p>
                <?php if($computers->getAr()=="")
                    {?>Ár: Nincs megadva <?php }
                     else
                     { ?> Ár: <?= number_format($computers->getAr(),2,".",' ');?>Ft
                    <?php } ?>

                </p>


            </div>
        <?php endforeach;?>

    </div>
</div>
