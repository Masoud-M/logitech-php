<?php include("views/partials/head.php"); ?>
<section class="container" aria-label="best selling products">


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