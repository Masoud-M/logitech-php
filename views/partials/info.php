<div role="text" class="info" aria-label="Product information">
    <?php
    $series = $productData["series"];
    $_id = $productData["_id"];
    $slug_title = $productData["slug_title"];
    $name = $productData["name"];

    if (isset($series)) {
        echo ("<p aria-label='Product category' class='category'>$series</p>");
    };
    echo ("
    <a class='product-link' href='/products/$_id/$slug_title'>
        <h1 aria-label='link to the product' class='title' id='$_id' >
            $name
        </h1> 
    </a> ");
    ?>
</div>