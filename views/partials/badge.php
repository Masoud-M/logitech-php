<?php
$price = (float) $productData["price"];
$discount = (float) $productData["discount"];

if ($price > 0):
    $newPrice = $price - $discount;
    $discountPercentage = number_format(($discount / $price) * 100, 2);
?>
    <span class='on-sale'><?= $discountPercentage ?>% OFF</span>
<?php endif; ?>