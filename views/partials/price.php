<?php
$price = (float) $productData["price"];
$discount = (float) $productData["discount"];

if ($price > 0) {
    $newPrice = $price - $discount;
    $discountPercentage = number_format(($discount / $price) * 100, 2);

    echo ("<div role='text' class='price' aria-label='product price' >");
    if ($productData["on_sale"]) {
        echo ("
                <span class='sr-only'> 
                    This item is on sale and being listed for $newPrice 
                </span>
                <div class='price-details'>
                    <span aria-hidden='true' class='updated'>$newPrice</span>
                    <span aria-hidden='true' class='standard'>$price</span>
                </div>
            </div>
                ");
    } else {
        echo ("
                <span class='sr-only'>
                    This item is listed for $price
                </span>
                <span aria-hidden='true' class='updated'>$price</span>
            </div>
                ");
    };
}
