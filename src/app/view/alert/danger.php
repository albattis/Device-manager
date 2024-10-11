<?php /** @var array $messages */ ?>

<div class="container" style="min-height: auto;">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-danger mt-3" role="alert">
                <?php foreach($messages as $message) : ?>
                    <?php echo $message ?>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>