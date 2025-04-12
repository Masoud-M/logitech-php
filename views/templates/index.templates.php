<?php include("views/partials/head.php"); ?>
<section class="container" aria-label="best selling products">
    <?php
    $productsJson = file_get_contents("models/products.json");
    $productsData = json_decode($productsJson, true);
    ?>

    <?php if (isset($productsData)): ?>
        <ul class='products-list'>
            <?php foreach ($productsData as $productData): ?>
                <?php include("views/partials/product.php"); ?>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>There are no items to display...</p>
    <?php endif; ?>
</section>
<?php include("views/partials/footer.php"); ?>