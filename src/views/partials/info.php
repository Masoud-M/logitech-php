<div role="text" class="info" aria-label="Product information">
    <?php
    $series = $productData["series"];
    $_id = $productData["_id"];
    $slug_title = $productData["slug_title"];
    $name = $productData["name"];
    ?>

    <?php if (isset($series)): ?>
        <p aria-label='Product category' class='category'><?= $series ?></p>
    <?php endif; ?>

    <a class='product-link' href='product?id=<?= $id ?>'>
        <h1 aria-label='link to the product' class='title'>
            <?= $name ?>
        </h1>
    </a>
</div>