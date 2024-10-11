<?php
/**
 * @var array $rows
 * @var string $key
 * @var string $value
 * @var string $id
 * @var string $name
 * @var string $label
 * @var string $selectedKey
 */
?>
<label for="<?= $id ?>"><?=$label?></label>
<select name="<?=$name?>" id="<?=$id?>" class="form-control">
<?php foreach ($rows as $row) : ?>

<?php
    $rowReflection = new ReflectionClass($row);
    $keyMethod = $rowReflection->getMethod($key);
    $valueMethod = $rowReflection->getMethod($value);
    $selected = ($keyMethod->invoke($row) == $selectedKey)?"selected":"";
?>
    <option value="<?= $keyMethod->invoke($row) ?>" <?= $selected ?> >
        <?= $valueMethod->invoke($row) ?>
    </option>
<?php endforeach; ?>
</select>