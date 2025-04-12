<!doctype html>
<html lang="en">

<?php
include("views/partials/head.php")
?>

<body>

    <main>
        <section class="container" aria-label="best selling products">

            <?php
            $productsJson = file_get_contents("models/products.json");
            $productsData = json_decode($productsJson, true);

            if (isset($productsData)) {
                echo ("<ul class='products-list'>");
                foreach ($productsData as $productData) {
                    include("views/partials/product.php");
                };
                echo ("</ul>");
            } else {
                echo ("<p>There are no items to display...</p>");
            };
            ?>
        </section>
    </main>
</body>

</html>