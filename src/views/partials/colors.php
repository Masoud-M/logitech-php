<?php
$colors = $productData["colors"];
$_id = $productData["_id"];

if (isset($colors)): ?>
    <ul class="options" aria-label="Color options">
        <?php foreach ($colors as $color): ?>
            <input
                aria-label="<?= $color ?>"
                class="<?= $color ?>"
                type="radio"
                name="color"
                value="<?= $color ?>" />
        <?php endforeach; ?>
    </ul>
<?php endif; ?>