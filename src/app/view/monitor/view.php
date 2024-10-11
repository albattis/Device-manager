<?php

use app\model\Monitor;
/**
 * @var Monitor[] $monitor
 *
 */

?>


<h1>Monitor</h1>


<div class="container">
    <div class="row">

        <?php foreach($monitor as $monitors):?>

            <div class="col-md-3">

                <a href="index.php?controller=Monitor&action=Monitor&id=<?=$monitors->getId()?>">

                    <?php
                    $kepdarabok=explode(';',$monitors->getKep());


                        if(!empty($kepdarabok))

                        {?> <img alt="" class="pcimg img-thumbnail"  src="<?=$kepdarabok[0]?>"><?php
                        }

                    ?>

                </a>
                <h2><?=$monitors->getNev()?></h2>

                <p>

                    Ár: <?= number_format($monitors->getAr(),2,".",' ');?>Ft
                </p>


            </div>
        <?php endforeach;?>

    </div>
</div>
