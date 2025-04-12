<div class="image-container" aria-hidden="true">
    <?php

    if ($productData["on_sale"]) {
        include("views/partials/badge.php");
    };
    ?>
    <picture class="product-image" aria-hidden="true">
        <?php
        $id = $productData['_id'];
        $slug = $productData['slug_title'];

        echo "<a href='/products/$id/$slug'>";
        echo ("<img aria-hidden='true' width='224' src='$productData[thumbnail_url]' alt='$productData[name]'/>");
        ?>
        </a>
    </picture>
</div>