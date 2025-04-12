
    <?php
    $colors = $productData["colors"];
    $_id = $productData["_id"];


    if (isset($colors)) {
        echo ("<ul class='options' aria-label='Color options'>");

        foreach ($colors as $color) {
            echo ("
            <input id='$_id' aria-label='$color' class='$color' type='radio' name='color' value='$color'  />");
        }
        echo ("</ul>");
    }
    ?>
