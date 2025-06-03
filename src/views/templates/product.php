<?php
include("views/partials/head.php");
?>
<section class="product-info" aria-label="Product info">
    <article class="product-container">
        <div class="grid-layout">
            <div class="product-image-wrapper">
                <ol class="product-category">
                    <li>
                        <span>/</span>
                        <h3><?= $productData["category"] ?></h3>
                    </li>
                    <li>
                        <span>/</span>
                        <h3><?= $productData["name"] ?></h3>
                    </li>
                </ol>

                <div class="product-info-mobile">
                    <?php include("views/partials/product-info.php"); ?>
                </div>

                <?php include("views/partials/product-images.php"); ?>
            </div>

            <div class="product-info-wrapper">
                <div class="product-info-desktop">
                    <?php include("views/partials/product-info.php"); ?>
                </div>

                <?php if (!empty($productData["colors"])) {
                    include("views/partials/colors.php");
                } ?>

                <button class="add-to-cart-btn">ADD TO CART</button>
            </div>
        </div>
    </article>
</section>
<?php include("views/partials/footer.php"); ?>