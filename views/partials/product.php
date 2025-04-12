<?php $productName = $productData["name"]; ?>

<li class="product" aria-label="<?= $productName ?>">
    <article class="product-card" aria-label="<?= $productName ?>">
        <?php include("views/partials/image.php"); ?>

        <div class="text-container">
            <?php
            include("views/partials/info.php");
            include("views/partials/colors.php");
            ?>

            <div class="cta">
                <?php include("views/partials/price.php"); ?>
                <?php include("views/partials/buy.php"); ?>
            </div>

        </div>
    </article>
</li>