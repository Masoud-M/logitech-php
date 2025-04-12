<div class="image-container" aria-hidden="true">
    <?php if ($productData["on_sale"]): ?>
        <?php include("views/partials/badge.php"); ?>
    <?php endif; ?>

    <picture class="product-image" aria-hidden="true">
        <?php
        $id = $productData['_id'];
        $slug = $productData['slug_title'];
        ?>
        <a href='/products/<?= $id ?>/<?= $slug ?>'>
            <img aria-hidden='true'
                width='224'
                src='<?= $productData["thumbnail_url"] ?>'
                alt='<?= $productData["name"] ?>' />
        </a>
    </picture>
</div>