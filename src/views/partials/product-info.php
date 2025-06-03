<?php
$price = (float) $productData["price"];
$discount = (float) $productData["discount"];

if ($price > 0):
    $newPrice = $price - $discount;
    $discountPercentage = number_format(($discount / $price) * 100, 2);
?>

    <div class="details">

        <?php if (!empty($productData['series'])): ?>
            <h2 class="category-link">
                <?= $productData['series'] ?>
            </h2>
        <?php endif; ?>

        <h1>
            <?= $productData['name'] ?>
        </h1>

        <p><?= $productData['description'] ?></p>

        <div class="reviews">
            <div class="stars" style="--rating: <?= $productData['rating'] ?>;" aria-label="Rating of this product is <?= htmlspecialchars($productData['rating']) ?> out of 5."></div>
            <a href="/">
                <?= $productData['reviews'] ?> Review<?= $productData['reviews'] > 1 ? 's' : '' ?>
            </a>
        </div>

        <div role="text" class="pricing" aria-label="Product price">
            <?php if (!empty($productData['on_sale'])): ?>
                <span class="sr-only">
                    This item is listed for $<?= number_format($newPrice, 2) ?>
                </span>
                <div class="on-sale-pricing">
                    <span aria-hidden="true" class="updated">$<?= number_format($newPrice, 2) ?></span>
                    <span aria-hidden="true" class="standard">$<?= number_format($productData['price'], 2) ?></span>
                    <span class="sale-badge">
                        SALE
                    </span>
                </div>
            <?php else: ?>
                <span class="sr-only">
                    This item is listed for $<?= number_format($productData['price'], 2) ?>
                </span>
                <span aria-hidden="true" class="updated">$<?= number_format($productData['price'], 2) ?></span>
            <?php endif; ?>
        </div>

    </div>

<?php endif; ?>