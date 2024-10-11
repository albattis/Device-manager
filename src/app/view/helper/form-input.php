<?php
/**
 * @var string $value
 * @var string $type
 * @var string $id
 * @var string $name
 * @var string $label
 * @var string $selectedKey
 */
?>
<label for="<?= $id ?>"><?=$label?></label>
<input type="<?=$type?>" name="<?= $name ?>" id="<?= $id ?>" class="form-control" value="<?=$value?>">