<?php
$price = (float) $productData["price"];
$discount = (float) $productData["discount"];

if ($price > 0):
    $newPrice = $price - $discount;
    $discountPercentage = number_format(($discount / $price) * 100, 2);
?>

    <div class="details">

        <?php if (!empty($productData['series'])): ?>
            <a class="category-link" href="/">
                <h2>
                    <?= htmlspecialchars($productData['series']) ?>
                </h2>
            </a>
        <?php endif; ?>

        <h1>
            <?= htmlspecialchars($productData['name']) ?>
        </h1>

        <p><?= htmlspecialchars($productData['description']) ?></p>

        <div class="reviews">
            <div class="stars" style="--rating: <?= htmlspecialchars($productData['rating']) ?>;" aria-label="Rating of this product is <?= htmlspecialchars($productData['rating']) ?> out of 5."></div>
            <a href="/">
                <?= htmlspecialchars($productData['reviews']) ?> Review<?= $productData['reviews'] > 1 ? 's' : '' ?>
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